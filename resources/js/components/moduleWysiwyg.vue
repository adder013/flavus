<template>
	<div id="wysiwyg-wrap">
		<div v-show="progress" class="update-message">
			<img src="/svg/loading_dashboard.svg" alt="Загрузка" />
		</div>
		<div v-show="error" class="error-message">{{ errorMessage }}</div>
		<div v-show="success" class="success-message">
			<img src="/svg/success_dashboard.svg" alt="Успешно" />
		</div>
		<div class="url">
			<span>uralenergotel.ru/</span>
			<input
				type="text"
				name="url"
				v-model="url"
				placeholder="Введите URL товара"
				required
			/>
			<form v-on:submit.prevent="getDescription()">
				<button>Загрузить</button>
			</form>
			<form v-on:submit.prevent="saveDescription()">
				<button>Сохранить</button>
			</form>
		</div>
		<ckeditor
			:editor="editor"
			v-model="editorData"
			:config="editorConfig"
		></ckeditor>
		<h2>HTML-код</h2>
		<textarea v-model="editorData" rows="15"></textarea>
	</div>
</template>

<script>
import ClassicEditor from "@ckeditor/ckeditor5-editor-classic/src/classiceditor";

import Essentials from "@ckeditor/ckeditor5-essentials/src/essentials";
import Heading from "@ckeditor/ckeditor5-heading/src/heading";
import Bold from "@ckeditor/ckeditor5-basic-styles/src/bold";
import Italic from "@ckeditor/ckeditor5-basic-styles/src/italic";
import Link from "@ckeditor/ckeditor5-link/src/link";
import List from "@ckeditor/ckeditor5-list/src/list";
import BlockQuote from "@ckeditor/ckeditor5-block-quote/src/blockquote";
import Table from "@ckeditor/ckeditor5-table/src/table";
import TableToolbar from "@ckeditor/ckeditor5-table/src/tabletoolbar";
import TableCellProperties from "@ckeditor/ckeditor5-table/src/tablecellproperties";
import TableProperties from "@ckeditor/ckeditor5-table/src/tableproperties";
import Image from "@ckeditor/ckeditor5-image/src/image";
import ImageCaption from "@ckeditor/ckeditor5-image/src/imagecaption";
import ImageStyle from "@ckeditor/ckeditor5-image/src/imagestyle";
import ImageToolbar from "@ckeditor/ckeditor5-image/src/imagetoolbar";
import ImageResize from "@ckeditor/ckeditor5-image/src/imageresize";

export default {
	data() {
		return {
			editor: ClassicEditor,
			editorData: "<h2>Описание</h2>",
			editorConfig: {
				plugins: [
					Essentials,
					Heading,
					Bold,
					Italic,
					Link,
					List,
					BlockQuote,
					Table,
					TableToolbar,
					TableCellProperties,
					TableProperties,
					Image,
					ImageCaption,
					ImageStyle,
					ImageToolbar,
					ImageResize
				],
				toolbar: [
					"heading",
					"|",
					"bold",
					"italic",
					"link",
					"bulletedList",
					"numberedList",
					"blockQuote",
					"|",
					"insertTable",
					"tableColumn",
					"tableRow",
					"mergeTableCells"
				],
				table: {
					contentToolbar: [
						"tableColumn",
						"tableRow",
						"mergeTableCells",
						"tableCellProperties",
						"tableProperties"
					]
				},
				image: {
					styles: ["full", "alignLeft", "alignCenter", "alignRight"],
					resizeOptions: [
						{
							name: "resizeImage:25",
							value: "25",
							label: "25%"
						},
						{
							name: "resizeImage:50",
							value: "50",
							label: "50%"
						},
						{
							name: "resizeImage:75",
							value: "75",
							label: "75%"
						},
						{
							name: "resizeImage:original",
							value: null,
							label: "Original"
						}
					],
					toolbar: [
						"imageStyle:alignLeft",
						"imageStyle:alignCenter",
						"imageStyle:alignRight",
						"|",
						"imageStyle:full",
						"|",
						"resizeImage",
						"|",
						"imageTextAlternative"
					]
				},
				language: "ru"
			},
			url: "",
			progress: false,
			error: false,
			errorMessage: String,
			success: false
		};
	},
	methods: {
		getDescription() {
			this.progress = true;
			this.$http.get("/getProductDescription?url=" + this.url).then(
				function successCallback(response) {
					this.progress = false;
					this.success = true;
					setTimeout(() => {
						this.success = false;
					}, 3000);
					this.editorData = response.data;
				},
				function errorCallback(response) {
					this.progress = false;
					this.error = true;
					this.errorMessage = Object.values(
						response.data.errors
					)[0][0];
					setTimeout(() => {
						this.error = false;
					}, 3000);
				}
			);
		},
		saveDescription() {
			Vue.http.headers.common[
				"X-CSRF-TOKEN"
			] = document.head.querySelector('meta[name="csrf-token"]').content;
			this.progress = true;
			this.$http
				.post(
					"/saveProductDescription",
					{ url: this.url, description: this.editorData },
					{ emulateJSON: true }
				)
				.then(
					function successCallback(response) {
						this.progress = false;
						this.success = true;
						setTimeout(() => {
							this.success = false;
						}, 3000);
					},
					function errorCallback(response) {
						console.log(response);
						this.progress = false;
						this.error = true;
						this.errorMessage = Object.values(
							response.data.errors
						)[0][0];
						setTimeout(() => {
							this.error = false;
						}, 3000);
					}
				);
		}
	}
};
</script>
