<template>
     <div class="text-options">
         <h2>Дополнительные характеристики</h2>
         <form v-on:submit.prevent="addTextOption" class="add-calc-group">
             <input type="text" name="name" v-model="dataform.txtName" placeholder="Название характеристики">
             <input type="text" name="value" v-model="dataform.txtValue" placeholder="Значение характеристики">
             <button><i class="fas fa-plus-square"></i><span>Добавить</span></button>
         </form>
         <draggable :list="text_options" class="dragArea" @change="change">
            <ul v-for="element in text_options">
                <li>
                    <div class="calc-name">{{ element.name }}</div>
                    <div class="calc-code">{{ element.value }}</div>
                    <button @click="deleteOption(element.id)"><svg fill="#8d95a4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 612 612" xml:space="preserve"><path d="M561,76.5H178.5c-17.85,0-30.6,7.65-40.8,22.95L0,306l137.7,206.55c10.2,12.75,22.95,22.95,40.8,22.95H561    c28.05,0,51-22.95,51-51v-357C612,99.45,589.05,76.5,561,76.5z M484.5,397.8l-35.7,35.7L357,341.7l-91.8,91.8l-35.7-35.7    l91.8-91.8l-91.8-91.8l35.7-35.7l91.8,91.8l91.8-91.8l35.7,35.7L392.7,306L484.5,397.8z" /></svg></button>
                </li>
            </ul>
        </draggable>
      </div>
</template>
<script>
export default {
    name: 'text-options',
    props: {
        propId: String,
    },
    components: {
        draggable: VueDraggable
    },
    data() {
        return {
            dataform: {},
            text_options: [],
    	};
    },
    methods: {
        deleteOption(id) {
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http.post('/deleteTextOption', { id: id }, {emulateJSON:true})
            .then(function() {
                this.$http.get('/getTextOptions/' + this.propId)
                .then(function(response) {
                    this.text_options = response.data;
                });
            });
        },
        addTextOption() {
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http.post('/addTextOption', { product_id: this.propId, name: this.dataform.txtName, value: this.dataform.txtValue }, {emulateJSON:true})
            .then(function() {
                this.$http.get('/getTextOptions/' + this.propId)
                .then(function(response) {
                    this.text_options = response.data;
                    this.dataform.txtName = '';
                    this.dataform.txtValue = '';
                });
            });
        },
        change() {
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http.post('/changeTextSortOptions', { options: this.text_options }, { emulateJSON:true })
            .then(function() {
                this.$http.get('/getTextOptions/' + this.propId)
                .then(function(response) {
                    this.text_options = response.data;
                });
            });
        },
    },
    created: function() {
        this.$http.get('/getTextOptions/' + this.propId)
        .then(function(response) {
            this.text_options = response.data;
        });
    },
    mounted() {
  	},
};
</script>
<style>
.dragArea{
     min-height: 10px;
}
</style>
