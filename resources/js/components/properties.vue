<template>
	<div class="properties-wrap">
		<h1>Характеристики товаров</h1>
		<div v-show="progress" class="update-message">Идет обновление...</div>
		<div v-show="error" class="error-message">{{ errorMessage }}</div>
		<div v-show="success" class="success-message">{{ successMessage }}</div>
		<form v-on:submit.prevent="addOption()" class="add-property">
			<div class="input-wrap">
				<div class="name">Название:</div>
				<input type="text" name="name" v-model="dataform.name" placeholder="Название" required />
			</div>
			<div class="input-wrap">
				<div class="name">URL:</div>
				<input type="text" name="url" v-model="dataform.url" placeholder="URL" required />
			</div>
			<div class="select-wrap">
				<div class="name">Тип характеристики:</div>
				<select name="type" v-model="dataform.type" required>
					<option value disabled selected>Тип характеристики</option>
					<option value="1">Одно значение</option>
					<option value="2">Множество значений</option>
					<option value="3">Текст</option>
				</select>
			</div>
			<div class="btn-sub-wrap">
				<button>
					<i class="fas fa-plus-square"></i>
					<span>Добавить</span>
				</button>
			</div>
		</form>
		<div class="properies-title">
			<div class="name">Название</div>
			<div class="url">URL</div>
			<div class="type">Тип</div>
			<div class="delete"></div>
		</div>
		<a
			v-bind:href="'/dashboard/properties/' + property.url"
			v-for="property in properties"
			class="property-block"
		>
			<div class="name">
				<div class="header">Название:</div>
				<div class="body">{{ property.name }}</div>
			</div>
			<div class="url">
				<div class="header">URL:</div>
				<div class="body">{{ property.url }}</div>
			</div>
			<div class="type">
				<div class="header">Тип:</div>
				<div class="body">{{ property.typeName }}</div>
			</div>
			<div v-on:click.prevent="deleteOption(property.id)" class="delete">
				<i class="fas fa-trash-alt"></i>
			</div>
		</a>
	</div>
</template>
<script>
export default {
	name: "properties",
	data() {
		return {
			progress: false,
			error: false,
			errorMessage: String,
			success: false,
			successMessage: String,
			dataform: {
				name: "",
				url: "",
				type: "Тип характеристики"
			},
			properties: []
		};
	},
	methods: {
		deleteOption(id) {
			this.progress = true;
			Vue.http.headers.common[
				"X-CSRF-TOKEN"
			] = document.head.querySelector('meta[name="csrf-token"]').content;
			this.$http
				.post("/deleteProperty", { id: id }, { emulateJSON: true })
				.then(function() {
					this.$http.get("/getProperties").then(function(response) {
						this.properties = response.data;
						this.progress = false;
					});
				});
		},
		addOption() {
			this.success = false;
			this.error = false;
			this.progress = true;
			Vue.http.headers.common[
				"X-CSRF-TOKEN"
			] = document.head.querySelector('meta[name="csrf-token"]').content;
			this.$http
				.post(
					"/addProperty",
					{
						name: this.dataform.name,
						url: this.dataform.url,
						type: this.dataform.type
					},
					{ emulateJSON: true }
				)
				.then(
					function successCallback(response) {
						this.progress = false;
						this.success = true;
						this.successMessage = response.data.message;
						setTimeout(() => {
							this.success = false;
						}, 3000);
						this.$http
							.get("/getProperties")
							.then(function(response) {
								this.properties = response.data;
							});
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
		}
	},
	created: function() {
		this.$http.get("/getProperties").then(function(response) {
			this.properties = response.data;
		});
	}
};
</script>
