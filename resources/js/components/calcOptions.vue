<template>
     <div class="calculated-options">
         <h2>Калькулятор опций</h2>
         <form v-on:submit.prevent="groupSub" class="add-calc-group">
             <input type="text" name="name" v-model="dataform.groupName" placeholder="Название типа опции">
             <button><i class="fas fa-plus-square"></i><span>Добавить</span></button>
         </form>
         <draggable :list="calc_groups" class="dragArea" @change="change">
             <ul v-for="group in calc_groups">
                 <li>{{ group.name }} <button @click="deleteGroup(group.id)"><svg fill="#8d95a4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 612 612" xml:space="preserve"><path d="M561,76.5H178.5c-17.85,0-30.6,7.65-40.8,22.95L0,306l137.7,206.55c10.2,12.75,22.95,22.95,40.8,22.95H561    c28.05,0,51-22.95,51-51v-357C612,99.45,589.05,76.5,561,76.5z M484.5,397.8l-35.7,35.7L357,341.7l-91.8,91.8l-35.7-35.7    l91.8-91.8l-91.8-91.8l35.7-35.7l91.8,91.8l91.8-91.8l35.7,35.7L392.7,306L484.5,397.8z" /></svg></button></li>
                 <form v-on:submit.prevent="nextGroupSub(group.id, group.newName, group.newCode, group.newPrice)" class="add-calc-option">
                     <input type="text" v-model="group.newName" name="name" placeholder="Название опции">
                     <input type="text" v-model="group.newCode" name="code" placeholder="Код опции">
                     <input type="number" v-model="group.newPrice" name="price" placeholder="Цена">
                     <button><i class="fas fa-plus-square"></i><span>Добавить</span></button>
                 </form>
                 <draggable :list="calc_options" class="dragArea" @change="change">
                    <ul v-for="element in calc_options">
                        <li v-if="element.calc_group_id === group.id">
                            <div class="calc-name">{{ element.name }}</div>
                            <div class="calc-code">{{ element.code }}</div>
                            <div class="calc-price">{{ element.price }}</div>
                            <button @click="deleteOption(element.id)"><svg fill="#8d95a4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 612 612" xml:space="preserve"><path d="M561,76.5H178.5c-17.85,0-30.6,7.65-40.8,22.95L0,306l137.7,206.55c10.2,12.75,22.95,22.95,40.8,22.95H561    c28.05,0,51-22.95,51-51v-357C612,99.45,589.05,76.5,561,76.5z M484.5,397.8l-35.7,35.7L357,341.7l-91.8,91.8l-35.7-35.7    l91.8-91.8l-91.8-91.8l35.7-35.7l91.8,91.8l91.8-91.8l35.7,35.7L392.7,306L484.5,397.8z" /></svg></button>
                        </li>
                    </ul>
                </draggable>
            </ul>
          </draggable>
      </div>
</template>
<script>
export default {
    name: 'calc-options',
    props: {
        propId: String,
    },
    components: {
        draggable: VueDraggable
    },
    data() {
        return {
            dataform: {},
            calc_groups: [],
            calc_options: [],
    	};
    },
    methods: {
        deleteGroup(id) {
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http.post('/deleteCalcGroup', { id: id }, {emulateJSON:true})
            .then(function() {
                this.$http.get('/getCalcOptions/' + this.propId)
                .then(function(response) {
                    this.calc_groups = response.data.calc_groups;
                    this.calc_options = response.data.calc_options;
                });
            });
        },
        deleteOption(id) {
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http.post('/deleteCalcOption', { id: id }, {emulateJSON:true})
            .then(function() {
                this.$http.get('/getCalcOptions/' + this.propId)
                .then(function(response) {
                    this.calc_groups = response.data.calc_groups;
                    this.calc_options = response.data.calc_options;
                });
            });
        },
        groupSub() {
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http.post('/addCalcGroup', { product_id: this.propId, name: this.dataform.groupName }, {emulateJSON:true})
            .then(function() {
                this.$http.get('/getCalcOptions/' + this.propId)
                .then(function(response) {
                    this.calc_groups = response.data.calc_groups;
                    this.calc_options = response.data.calc_options;
                    this.dataform.groupName = '';
                });
            });
        },
        nextGroupSub(id, name, code, price) {
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http.post('/addCalcOption', { group_id: id, name: name, code: code, price: price }, {emulateJSON:true})
            .then(function() {
                this.$http.get('/getCalcOptions/' + this.propId)
                .then(function(response) {
                    this.calc_groups = response.data.calc_groups;
                    this.calc_options = response.data.calc_options;
                });
            });
        },
        change() {
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http.post('/changeSortOptions', { groups: this.calc_groups, options: this.calc_options }, {emulateJSON:true})
            .then(function() {
                this.$http.get('/getCalcOptions/' + this.propId)
                .then(function(response) {
                    this.calc_groups = response.data.calc_groups;
                    this.calc_options = response.data.calc_options;
                });
            });
        },
    },
    created: function() {
        this.$http.get('/getCalcOptions/' + this.propId)
        .then(function(response) {
            this.calc_groups = response.data.calc_groups;
            this.calc_options = response.data.calc_options;
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
