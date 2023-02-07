<template>
<v-container v-if="!$auth.check()" fluid fill-height>
    <v-layout align-center justify-center>
        <v-flex xs12 sm8 md4>
            <v-card class="elevation-12">
                <v-toolbar dark color="primary">
                    <v-toolbar-title>Зарегистрироваться</v-toolbar-title>
                    <v-spacer></v-spacer>
                    <v-tooltip right>
                        <template v-slot:activator="{ on }">
                            <v-btn :to="{ name: 'login' }" icon large v-on="on">
                                <v-icon large>person</v-icon>
                            </v-btn>
                        </template>
                        <span>Я уже зарегистрирован - Войти</span>
                    </v-tooltip>
                </v-toolbar>
                <v-card-text>
                    <v-form>
                        <v-text-field v-model="client.name" :error-messages="validation.name" prepend-icon="business" name="name" label="Наименование организации" type="text"></v-text-field>
                        <v-text-field v-model="client.email" :error-messages="validation.email" prepend-icon="mail" name="email" label="E-mail" type="email"></v-text-field>
                        <v-text-field v-model="client.password" :error-messages="validation.password" prepend-icon="lock" name="password" label="Пароль" type="password"></v-text-field>
                        <v-text-field v-model="client.password_confirmation" :error-messages="validation.password_confirmation" prepend-icon="lock" name="password_confirmation" label="Повторите пароль" type="password"></v-text-field>
                    </v-form>
                </v-card-text>
                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn @click="register" color="primary">Зарегистрироваться</v-btn>
                </v-card-actions>
            </v-card>
        </v-flex>
    </v-layout>
</v-container>
</template>

<script>
export default {
    data: () => ({
        drawer: null,
        reg_client: {},
        client: {
            'name': '',
            'email': '',
            'password': '',
            'password_confirmation': '',
        },
        validation: {
            'name': '',
            'email': '',
            'password': '',
            'password_confirmation': '',
        },
        req_id: null,
    }),
    methods: {
        async register() {
            await this.$auth.register({
                data: {
                    name: this.client.name,
                    email: this.client.email,
                    password: this.client.password,
                    password_confirmation: this.client.password_confirmation,
                    token_client_id: this.req_id
                },
                success: function (response) {
                    this.$router.push('//');
                },
                error: function (error) {
                    this.validation.name = error.response.data.errors.name ? error.response.data.errors.name[0] : '';
                    this.validation.email = error.response.data.errors.email ? error.response.data.errors.email[0] : '';
                    this.validation.password = error.response.data.errors.password ? error.response.data.errors.password[0] : '';
                },
                redirect: '/',
            });
            this.$auth.login({
                params: {
                    email: this.client.email,
                    password: this.client.password
                },
                success: function (response) {
                    console.log(response);
                },
                error: function (error) {
                    console.log(error);
                },
                rememberMe: true,
                fetchUser: true,
                redirect: '/',
            });
        },
    },
    created() {
        if (this.$route.query.reg_token) {
            axios('/clients/token/' + this.$route.query.reg_token).then(
                (success) => {
                    this.client.name = success.data.name;
                    this.client.email = success.data.email;
                    this.req_id = success.data.id;
                },
                (error) => {
                    console.error(error);
                }
            )
        }
        if (this.$auth.check()) {
            this.$router.push('//');
        }
    },
}
</script>
