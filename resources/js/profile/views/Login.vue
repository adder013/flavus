<template>
<v-container v-if="!$auth.check()" fluid fill-height>
    <v-layout align-center justify-center>
        <v-flex xs12 sm8 md4>
            <v-card class="elevation-12">
                <v-toolbar dark color="primary">
                    <v-toolbar-title>Вход в личный кабинет</v-toolbar-title>
                    <v-spacer></v-spacer>
                    <v-tooltip right>
                        <template v-slot:activator="{ on }">
                            <v-btn :to="{ name: 'register' }" icon large v-on="on">
                                <v-icon large>person_add</v-icon>
                            </v-btn>
                        </template>
                        <span>Зарегистрироваться</span>
                    </v-tooltip>
                </v-toolbar>
                <v-card-text>
                    <v-form>
                        <v-text-field v-model="client.email" :error-messages="validation.email" prepend-icon="mail" name="email" label="E-mail" type="email"></v-text-field>
                        <v-text-field v-model="client.password" :error-messages="validation.password" prepend-icon="lock" name="password" label="Пароль" type="password"></v-text-field>
                    </v-form>
                </v-card-text>
                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn @click="login()" color="primary">Войти</v-btn>
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
        client: {},
        validation: {
            'email': '',
            'password': '',
        },
    }),
    methods: {
        login() {
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
        if (this.$auth.check()) {
            this.$router.push('//');
        }
    },
}
</script>
