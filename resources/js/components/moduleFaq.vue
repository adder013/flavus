<template>
	<div class="module-faq-wrap">		
		<h1>FAQ</h1>
		<form v-on:submit.prevent="addCategory()" class="add-category">
			<input type="text" name="name" v-model="newCategory" placeholder="Новая категория" required />
			<button>
				<i class="fas fa-plus-square"></i>
				<span>Добавить</span>
			</button>
		</form>
		<draggable :list="categories" class="drag-area" @change="changeFaqCategoriesSort">
			<div v-for="category in categories" class="category-block">
				<div :id="'slideCategory_'+category.id" v-on:click="slideCat(category.id)" class="preview">
					<div class="category-name">{{ category.name }}<button @click="deleteCategory(category.id)"><svg fill="#8d95a4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 612 612" xml:space="preserve"><path d="M561,76.5H178.5c-17.85,0-30.6,7.65-40.8,22.95L0,306l137.7,206.55c10.2,12.75,22.95,22.95,40.8,22.95H561    c28.05,0,51-22.95,51-51v-357C612,99.45,589.05,76.5,561,76.5z M484.5,397.8l-35.7,35.7L357,341.7l-91.8,91.8l-35.7-35.7    l91.8-91.8l-91.8-91.8l35.7-35.7l91.8,91.8l91.8-91.8l35.7,35.7L392.7,306L484.5,397.8z"/></svg></button></div>
				</div>
				<div class="wrap">
					<form v-on:submit.prevent="addQuestion(category.id)" class="add-question">
						<p>Новый вопрос:</p>
						<div class="new-question-wrap">
							<div class="textarea-wrap">
								<textarea name="question" v-model="newQuestion.question" placeholder="Вопрос"></textarea>
							</div>
							<div class="textarea-wrap">
								<textarea name="answer" v-model="newQuestion.answer" placeholder="Ответ"></textarea>
							</div>
						</div>
						<button>
							<i class="fas fa-plus-square"></i>
							<span>Добавить</span>
						</button>
					</form>
					<draggable :list="questions[category.id]" class="drag-area questions-block" @change="changeFaqSort">
						<div v-for="question in questions[category.id]" class="question">
							<div :id="'slideQuestion_'+question.id" v-on:click="slideQuestion(question.id)" class="preview">
								<span>{{ question.question }}</span>
							</div>
							<form v-on:submit.prevent="updateQuestion(question)">
								<div class="textarea-wrap">
									<div class="name">Вопрос:</div>
									<textarea name="question" v-model="question.question" placeholder="Вопрос"></textarea>
								</div>
								<div class="textarea-wrap">
									<div class="name">Ответ:</div>
									<textarea name="answer" v-model="question.answer" placeholder="Ответ"></textarea>
								</div>
								<div class="btn-wrap">
									<div class="btn-sub-wrap">
										<button type="submit"><i class="fas fa-hdd"></i><span>Обновить</span></button>
									</div>
									<div class="btn-sub-wrap">
										<button v-on:click.prevent="deleteQuestion(question.id)" type="button"><i class="fas fa-trash"></i><span>Удалить</span></button>
									</div>
								</div>
							</form>
						</div>
					</draggable>

				</div>
			</div>
		</draggable>
	</div>
</template>

<script>
export default {
	name: "module-faq",
	components: {
		draggable: VueDraggable
	},
	data() {
		return {
			categories: [],
			questions: [],
			newQuestion: {},
			newCategory: [],
		}
	},
	methods: {
        slideCat(element) {
            $('#slideCategory_' + element).next().slideToggle();
        },
        slideQuestion(element) {
            $('#slideQuestion_' + element).next().slideToggle();
        },
		getFaqCategories() {
			this.$http.get('/getfaqcategories').then(function(responce) {
				this.categories = responce.data;
			});
		},
		getFaqQuestions() {
			this.$http.get('/getfaqquestions').then(function(responce) {
				this.questions = responce.data;
			});
		},
		updateQuestion(question) {
			Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
			this.$http.post('/updatequestion', { question: question }, { emulatedJSON: true });
		},
		deleteQuestion(id) {
			Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
			this.$http.post('/deletequestion', { id: id }, { emulatedJSON: true }).then(function() {
				this.$http.get('/getfaqquestions').then(function(responce) {
					this.questions = responce.data;
				});
			});
		},
		changeFaqCategoriesSort() {
			Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
			this.$http.post('/changefaqcategoriessort', { categories: this.categories }, { emulatedJSON: true });
		},
		changeFaqSort() {
			Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
			this.$http.post('/changefaqsort', { questions: this.questions }, { emulatedJSON: true });
		},
		addQuestion(category_id) {
			Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
			this.$http.post('/addquestion', { category_id: category_id, question: this.newQuestion }, { emulatedJSON: true }).then(function() {
				this.$http.get('/getfaqquestions').then(function(responce) {
					this.questions = responce.data;
				});
			});
		},
		addCategory() {
			Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
			this.$http.post('/addcategory', {name: this.newCategory }, { emulatedJSON: true }).then(function() {
				this.$http.get('/getfaqcategories').then(function(responce) {
					this.categories = responce.data;
				});
			});
		},
		deleteCategory(category_id) {
			Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
			this.$http.post('/deletecategory', { id: category_id }, { emulatedJSON: true }).then(function() {
				this.$http.get('/getfaqcategories').then(function(responce) {
					this.categories = responce.data;
				});
			});
		}
	},
	created: function() {
		this.getFaqCategories();
		this.getFaqQuestions();
	},
	mounted() {}
}
</script>

<style>

</style>