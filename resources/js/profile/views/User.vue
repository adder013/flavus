<template>
<v-container v-if="$auth.check()" fluid>
    <v-layout fill-height row wrap>
        <v-flex xs12>
            <v-text-field type="text" prepend-icon="account_box" v-model="client.name" :error-messages="validation.name" @change="client.name = client.name.charAt(0).toUpperCase() + client.name.slice(1)" label="Наименование организации" required></v-text-field>
        </v-flex>
        <v-flex xs12>
            <v-text-field type="email" prepend-icon="mail" v-model="client.email" :error-messages="validation.email" label="E-mail" required></v-text-field>
        </v-flex>
        <v-flex xs12>
            <v-text-field prepend-icon="vpn_key" v-model="client.password" :error-messages="validation.password" :append-icon="showPass ? 'visibility_off' : 'visibility'" :type="showPass ? 'text' : 'password'" label="Пароль" hint="Минимум 6 символов"
                counter @click:append="showPass = !showPass"></v-text-field>
        </v-flex>
        <v-flex xs12 class="mb-2">
            <v-btn dark @click="updateUser()" class="ml-0 mt-3" color="light-green">
                <v-icon class="pr-2">add_box</v-icon>Обновить
            </v-btn>
            <v-btn dark @click.stop="dialog = true" class="mt-3" color="orange">
                <v-icon class="pr-2">delete</v-icon>Удалить
            </v-btn>
            <v-dialog v-model="dialog" persistent max-width="290">
                <v-card>
                    <v-card-title class="headline">Вы уверены, что хотите удалить Ваш профиль?</v-card-title>
                    <v-card-text>После удаления аккаунта, все данные и история заказов будет безвозвратно удалена.</v-card-text>
                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn color="green darken-1" flat @click="dialog = false">Отменить</v-btn>
                        <v-btn color="red" flat @click="deleteUser()">Удалить</v-btn>
                    </v-card-actions>
                </v-card>
            </v-dialog>
        </v-flex>
        <v-flex xs12 sm8 md4 class="mt-2">
            <v-card :color="$auth.user().discount_level.color">
                <v-card-title primary-title>
                    <div>
                        <span class="caption">Статус участника</span>
                        <div class="headline">{{ $auth.user().discount_level.name }}</div>
                    </div>
                </v-card-title>
                <v-card-text>Скидка на все товары {{ $auth.user().discount_level.base_discount }}%</v-card-text>
                <v-card-actions>
                    <v-btn flat>Подробнее</v-btn>
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
        dialog: false,
        showPass: false,
        client: {},
        validation: {
            'name': '',
            'email': '',
            'password': '',
        },
    }),
    methods: {
        updateUser() {
            axios.patch('/clients/' + this.$auth.user().id, this.client).then(
                (success) => {
                    this.$auth.user().name = success.data.name;
                    this.$auth.user().email = success.data.email;
                    this.validation = {
                            'name': '',
                            'email': '',
                            'password': '',
                        },
                        console.log(success);
                },
                (error) => {
                    this.validation.name = error.response.data.errors.name ? error.response.data.errors.name[0] : '';
                    this.validation.email = error.response.data.errors.email ? error.response.data.errors.email[0] : '';
                    this.validation.password = error.response.data.errors.password ? error.response.data.errors.password[0] : '';
                    console.error(error);
                },
            )
        },
        deleteUser() {
            this.dialog = false;
            axios.delete('/clients/' + this.$auth.user().id);
            this.$auth.logout();
            this.$router.push('/login');
        },
    },
    created() {
        if (!this.$auth.check()) {
            this.$router.push('/login');
        }
        this.client.name = this.$auth.user().name;
        this.client.email = this.$auth.user().email;
    },
}
</script>
