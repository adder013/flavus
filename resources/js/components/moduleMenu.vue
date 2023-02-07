<template>
     <div class="module-menu">
         <h1>Меню</h1>
         <form v-on:submit.prevent="addMenu()" class="add-menu">
             <input type="text" name="name" v-model="dataform.name" placeholder="Название" required>
             <input type="text" name="name" v-model="dataform.url" placeholder="Url" required>
             <button><i class="fas fa-plus-square"></i><span>Добавить</span></button>
         </form>
         <draggable :list="menu_links" class="dragArea" @change="change">
             <ul v-for="menu in menu_links">
                 <li>{{ menu.name }} <button @click="deleteMenu(menu.id)"><svg fill="#8d95a4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 612 612" xml:space="preserve"><path d="M561,76.5H178.5c-17.85,0-30.6,7.65-40.8,22.95L0,306l137.7,206.55c10.2,12.75,22.95,22.95,40.8,22.95H561    c28.05,0,51-22.95,51-51v-357C612,99.45,589.05,76.5,561,76.5z M484.5,397.8l-35.7,35.7L357,341.7l-91.8,91.8l-35.7-35.7    l91.8-91.8l-91.8-91.8l35.7-35.7l91.8,91.8l91.8-91.8l35.7,35.7L392.7,306L484.5,397.8z" /></svg></button></li>
                 <form v-on:submit.prevent="addSubMenu(menu.id, menu.newName, menu.newUrl)" class="add-sub-menu">
                     <input type="text" v-model="menu.newName" name="name" placeholder="Название">
                     <input type="text" v-model="menu.newUrl" name="code" placeholder="Url">
                     <button><i class="fas fa-plus-square"></i><span>Добавить</span></button>
                 </form>
                 <draggable :list="sub_menu_links" class="dragArea" @change="change">
                    <ul v-for="sub_menu in sub_menu_links">
                        <li v-if="sub_menu.parent_id === menu.id">
                            <div class="sub-menu-name">{{ sub_menu.name }}</div>
                            <div class="sub-menu-url">{{ sub_menu.url }}</div>
                            <button @click="deleteSubMenu(sub_menu.id)"><svg fill="#8d95a4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 612 612" xml:space="preserve"><path d="M561,76.5H178.5c-17.85,0-30.6,7.65-40.8,22.95L0,306l137.7,206.55c10.2,12.75,22.95,22.95,40.8,22.95H561    c28.05,0,51-22.95,51-51v-357C612,99.45,589.05,76.5,561,76.5z M484.5,397.8l-35.7,35.7L357,341.7l-91.8,91.8l-35.7-35.7    l91.8-91.8l-91.8-91.8l35.7-35.7l91.8,91.8l91.8-91.8l35.7,35.7L392.7,306L484.5,397.8z" /></svg></button>
                        </li>
                    </ul>
                </draggable>
            </ul>
          </draggable>
      </div>
</template>
<script>
export default {
    name: 'module-menu',
    props: {
        propId: String,
    },
    components: {
        draggable: VueDraggable
    },
    data() {
        return {
            dataform: {},
            menu_links: [],
            sub_menu_links: [],
    	};
    },
    methods: {
        deleteMenu(id) {
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http.post('/deleteMenu', { id: id }, {emulateJSON:true})
            .then(function() {
                this.$http.get('/getMenuLinks')
                    .then(function(response) {
                        this.menu_links = response.data.menu_links;
                        this.sub_menu_links = response.data.sub_menu_links;
                    });
            });
        },
        deleteSubMenu(id) {
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http.post('/deleteSubMenu', { id: id }, {emulateJSON:true})
            .then(function() {
                this.$http.get('/getMenuLinks')
                    .then(function(response) {
                        this.menu_links = response.data.menu_links;
                        this.sub_menu_links = response.data.sub_menu_links;
                    });
            });
        },
        addMenu() {
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http.post('/addMenu', { name: this.dataform.name, url: this.dataform.url }, {emulateJSON:true})
            .then(function() {
                this.$http.get('/getMenuLinks')
                    .then(function(response) {
                        this.menu_links = response.data.menu_links;
                        this.sub_menu_links = response.data.sub_menu_links;
                    });
            });
        },
        addSubMenu(id, name, url) {
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http.post('/addSubMenu', { parent_id: id, name: name, url: url }, {emulateJSON:true})
            .then(function() {
                this.$http.get('/getMenuLinks')
                    .then(function(response) {
                        this.menu_links = response.data.menu_links;
                        this.sub_menu_links = response.data.sub_menu_links;
                    });
            });
        },
        change() {
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http.post('/changeSortMenu', { menu_links: this.menu_links, sub_menu_links: this.sub_menu_links }, {emulateJSON:true})
            .then(function() {
                this.$http.get('/getMenuLinks')
                    .then(function(response) {
                        this.menu_links = response.data.menu_links;
                        this.sub_menu_links = response.data.sub_menu_links;
                    });
            });
        },
    },
    created: function() {
    this.$http.get('/getMenuLinks')
        .then(function(response) {
            this.menu_links = response.data.menu_links;
            this.sub_menu_links = response.data.sub_menu_links;
        });
    },
    mounted() {
  	},
};
</script>
<style>
.normal {
    background-color: grey;
}
.drag {
    background-color: green;
}
.dragArea{
     min-height: 10px;
}
</style>
