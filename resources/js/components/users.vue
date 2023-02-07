<template>
    <div class="users-wrap">
        <h1>Управление пользователями</h1>
        <div v-show="progress" class="update-message">
            Идет обновление...
        </div>
        <form v-on:submit.prevent="addUser()" class="add-user">
            <div class="input-wrap">
                <div class="name">Имя:</div>
                <input type="text" name="name" v-model="dataform.name" placeholder="Имя" autocomplete="off" required>
            </div>
            <div class="input-wrap">
                <div class="name">E-mail:</div>
                <input type="email" name="email" v-model="dataform.email" placeholder="E-mail" autocomplete="new-email" required>
            </div>
            <div class="input-wrap">
                <div class="name">Пароль:</div>
                <input type="password" name="password" v-model="dataform.password" placeholder="Пароль" autocomplete="new-password" required>
            </div>
            <div class="btn-sub-wrap">
                <button><i class="fas fa-plus-square"></i><span>Добавить</span></button>
            </div>
        </form>
        <div class="users-title">
            <div class="name">Имя</div>
            <div class="url">URL</div>
            <div class="type">Уровень доступа</div>
            <div class="delete"></div>
        </div>
        <a v-bind:href="'/dashboard/users/' + user.id" v-for="user in users" class="user-block">
            <div class="name">
                <div class="header">Имя:</div>
                <div class="body">{{ user.name }}</div>
            </div>
            <div class="url">
                <div class="header">E-mail:</div>
                <div class="body">{{ user.email }}</div>
            </div>
            <div class="type">
                <div class="header">Уровень доступа:</div>
                <div class="body">{{ user.accessLevel }}</div>
            </div>
            <div v-on:click.prevent="deleteUser(user.id)" class="delete"><i class="fas fa-trash-alt"></i></div>
        </a>
    </div>
</template>
<script>
    export default {
        name: 'users',
        data() {
            return {
                progress: false,
                dataform: {},
                users: [],
            };
        },
        methods: {
            deleteUser(id) {
                this.progress = true;
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/deleteUser', { id: id }, { emulateJSON:true })
                .then(function() {
                    this.$http.get('/getUsers')
                    .then(function(response) {
                        this.progress = false;
                            this.users = response.data;
                    });
                });
            },
            addUser() {
                this.progress = true;
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/register', { name: this.dataform.name, email: this.dataform.email, password: this.dataform.password, password_confirmation: this.dataform.password }, { emulateJSON:false })
                .then(function(response) {
                    this.progress = false;
                    this.$http.get('/getUsers')
                    .then(function(response) {
                        this.users = response.data;
                    });
                });
            },
        },
        created: function() {
            this.$http.get('/getUsers')
            .then(function(response) {
                this.users = response.data;
            });
        },
    };
</script>
