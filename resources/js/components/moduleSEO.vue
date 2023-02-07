<template>
	<div class="module-seo-wrap">
		<h1>SEO</h1>
		<div v-show="progress" class="update-message">
			Идет обновление...
		</div>
		<div v-show="error" class="error-message">
			{{ errorMessage }}
		</div>
		<div v-show="success" class="success-message">
			{{ successMessage }}
		</div>
		<h2>Паттерны Meta Title</h2>
		<div class="seo-blocks">
			<form v-on:submit.prevent="updatePatternMeta(meta)" v-for="meta in metaPatterns" class="block">
				<h3>{{ meta.type }}</h3>
				<div class="input-wrap">
					<div class="name">Meta Title Start Point:</div>
					<input type="text" v-model="meta.metaTitleStartPoint" placeholder="Meta Title Start Point">
				</div>
				<div class="input-wrap">
					<div class="name">Meta Title End Point:</div>
					<input type="text" v-model="meta.metaTitleEndPoint" placeholder="Meta Title End Point">
				</div>

				<div class="textarea-wrap">
					<div class="name">Meta Description Start Point:</div>
					<textarea v-model="meta.metaDescriptionStartPoint" placeholder="Meta Description Start Point"></textarea>
				</div>

				<div class="textarea-wrap">
					<div class="name">Meta Description End Point:</div>
					<textarea v-model="meta.metaDescriptionEndPoint" placeholder="Meta Description End Point"></textarea>
				</div>
				<div class="btn-sub-wrap">
					<button><i class="fas fa-hdd"></i><span>Обновить</span></button>
				</div>
			</form>
		</div>
		<h2>Статические страницы</h2>
		<div class="seo-blocks">
			<form v-on:submit.prevent="updateMeta(meta)" v-for="meta in seo" class="block">
				<h3>{{ meta.page }}</h3>
				<div class="input-wrap">
					<div class="name">Meta Title:</div>
					<input type="text" v-model="meta.metaTitle" placeholder="Meta Title">
				</div>
				<div class="textarea-wrap">
					<div class="name">Meta Description:</div>
					<textarea v-model="meta.metaDescription" placeholder="Meta Description"></textarea>
				</div>
				<div class="btn-sub-wrap">
					<button><i class="fas fa-hdd"></i><span>Обновить</span></button>
				</div>
			</form>
		</div>
	</div>
</template>
<script>
	export default {
		name: 'module-seo',
		data() {
			return {
				progress: false,
				error: false,
				errorMessage: String,
				success: false,
				successMessage: String,
				seo: [],
				metaPatterns: [],
			}
		},
		methods: {
			updateMeta(meta) {
				this.success = false;
				this.error = false;
				this.progress = true;
				Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
				this.$http.post('/updatePagesMeta', { meta: meta }, {emulateJSON:true})
				.then(
					(success) => {
						this.progress = false;
						this.success = true;
						this.successMessage = 'Успешно обновлено!';
						setTimeout(() =>{
							this.success = false;
						}, 3000);
						this.$http.get('/getMetaStaticPages')
						.then(function(response) {
							this.seo = response.data.seo;
							this.metaPatterns = response.data.patterns;
						});
					},
					(error) => {
						this.progress = false;
						this.error = true;
						this.errorMessage = 'Произошла неизвестная ошибка';
						setTimeout(() =>{
							this.error = false;
						}, 3000);
					}
				)
			},
			updatePatternMeta(meta) {
				this.success = false;
				this.error = false;
				this.progress = true;
				Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
				this.$http.post('/updatePatterns', { meta: meta }, {emulateJSON:true})
				.then(
					(success) => {
						this.progress = false;
						this.success = true;
						this.successMessage = 'Успешно обновлено!';
						setTimeout(() =>{
							this.success = false;
						}, 3000);
						this.$http.get('/getMetaStaticPages')
						.then(function(response) {
							this.seo = response.data.seo;
							this.metaPatterns = response.data.patterns;
						});
					},
					(error) => {
						this.progress = false;
				        this.error = true;
				        this.errorMessage = 'Произошла неизвестная ошибка';
				        setTimeout(() =>{
				            this.error = false;
				        }, 3000);
					}
				)
			}
		},
		created: function() {
			this.$http.get('/getMetaStaticPages')
			.then(function(response) {
				this.seo = response.data.seo;
				this.metaPatterns = response.data.patterns;
			});
		},
	}
</script>
