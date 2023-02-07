<template>
	<div class="module-brands-tags">
		<div class="tags">
			<h1>Теги</h1>
			<form v-on:submit.prevent="addBrandsTag()" class="add-brands-tag">
				<input type="text" name="name" v-model="dataform.tagName" placeholder="Название тега" required />
				<button>
					<i class="fas fa-plus-square"></i>
					<span>Добавить</span>
				</button>
			</form>
			<draggable :list="brands_tags" class="dragArea" @change="changeTagsSort">
				<li v-for="(tag, index) in brands_tags" :key="tag.id">
					<div class="head">
						{{ tag.name }}
						<button @click="deleteBrandsTag(tag.id)">
							<svg fill="#8d95a4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 612 612" xml:space="preserve">
								<path d="M561,76.5H178.5c-17.85,0-30.6,7.65-40.8,22.95L0,306l137.7,206.55c10.2,12.75,22.95,22.95,40.8,22.95H561    c28.05,0,51-22.95,51-51v-357C612,99.45,589.05,76.5,561,76.5z M484.5,397.8l-35.7,35.7L357,341.7l-91.8,91.8l-35.7-35.7    l91.8-91.8l-91.8-91.8l35.7-35.7l91.8,91.8l91.8-91.8l35.7,35.7L392.7,306L484.5,397.8z"/>
							</svg>
						</button>
					</div>
					<div class="wrap">
						<textarea name="description" cols="30" rows="10" v-model="tag.description"></textarea>
						<input type="text" name="url" v-model="tag.url">
					</div>
					<button @click="saveTag(index)">
						<i class="fas fa-save"></i>
						<span>Сохранить</span>
					</button>
				</li>
			</draggable>
		</div>
		<div class="industries">
			<h1>Отрасли</h1>
			<form v-on:submit.prevent="addBrandsIndustry()" class="add-brands-tag">
				<input
					type="text"
					name="name"
					v-model="dataform.industryName"
					placeholder="Название отрасли"
					required
				/>
				<button>
					<i class="fas fa-plus-square"></i>
					<span>Добавить</span>
				</button>
			</form>
			<draggable :list="brands_industries" class="dragArea" @change="changeIndustriesSort">
				<li v-for="industry in brands_industries">
					<div class="head">
						{{ industry.name }}
						<button @click="deleteBrandsIndustry(industry.id)">
							<svg fill="#8d95a4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 612 612" xml:space="preserve">
								<path d="M561,76.5H178.5c-17.85,0-30.6,7.65-40.8,22.95L0,306l137.7,206.55c10.2,12.75,22.95,22.95,40.8,22.95H561    c28.05,0,51-22.95,51-51v-357C612,99.45,589.05,76.5,561,76.5z M484.5,397.8l-35.7,35.7L357,341.7l-91.8,91.8l-35.7-35.7    l91.8-91.8l-91.8-91.8l35.7-35.7l91.8,91.8l91.8-91.8l35.7,35.7L392.7,306L484.5,397.8z"/>
							</svg>
						</button>
					</div>
				</li>
			</draggable>
		</div>
	</div>
</template>
<script>
export default {
	name: "module-brands-tags",
	props: {
		propId: String
	},
	components: {
		draggable: VueDraggable
	},
	data() {
		return {
			dataform: {},
			brands_tags: [],
			brands_industries: []
		};
	},
	methods: {
		addBrandsTag() {
			Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
			this.$http.post('/addBrandsTag', { name: this.dataform.tagName }, { emulateJSON: true })
				.then(function() {
					this.$http.get('/getBrandsTags').then(function(responce) {
						this.brands_tags = responce.data.brands_tags;
					});
				});
			this.dataform.tagName = '';
		},
		deleteBrandsTag(id) {
			Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
			this.$http.post('/deleteBrandsTag', { id: id }, { emulateJSON: true })
				.then(function() {
					this.$http.get('/getBrandsTags')
						.then(function(responce) {
							this.brands_tags = responce.data.brands_tags;
						});
				});
		},
		changeTagsSort() {
			Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
			this.$http.post('/changeBrandsTagsSort', { brands_tags: this.brands_tags }, { emulateJSON: true })
				.then(function() {
					this.$http.get('/getBrandsTags')
						.then(function(responce) {
							this.brands_tags = responce.data.brands_tags;
						})
				})
		},
		saveTag(index) {
			Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
			this.$http.post('/updateBrandsTag', { tag: this.brands_tags[index] }, { emulateJSON: true })
				.then(function() {
					this.$http.get('/getBrandsTags')
						.then(function(responce) {
							this.brands_tags = responce.data.brands_tags;
						})
				})
			this.dataform.industryName = '';
		},
		addBrandsIndustry() {
			Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
			this.$http.post('/addBrandsIndustry', { name: this.dataform.industryName }, { emulateJSON: true })
				.then(function() {
					this.$http.get('/getBrandsIndustries').then(function(responce) {
						this.brands_industries = responce.data.brands_industries;
					});
				});
			this.dataform.industryName = '';
		},
		deleteBrandsIndustry(id) {
			Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
			this.$http.post('/deleteBrandsIndustry', { id: id }, { emulateJSON: true })
				.then(function() {
					this.$http.get('/getBrandsIndustries').then(function(responce) {
						this.brands_industries = responce.data.brands_industries;
					});
				});
		},
		changeIndustriesSort() {
			Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
			this.$http.post('/changeBrandsIndustriesSort', { brands_industries: this.brands_industries }, { emulateJSON: true })
				.then(function() {
					this.$http.get('/getBrandsIndustries').then(function(responce) {
						this.brands_industries = responce.data.brands_industries;
					});
				});
		},
	},
	created: function() {
		this.$http.get('/getBrandsTags').then(function(responce) {
			this.brands_tags = responce.data.brands_tags;
		});
		this.$http.get('/getBrandsIndustries').then(function(responce) {
			this.brands_industries = responce.data.brands_industries;
		});
	},
	mounted() {}
};
</script>
<style>
.normal {
	background-color: grey;
}
.drag {
	background-color: green;
}
.dragArea {
	min-height: 10px;
}
</style>