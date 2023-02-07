<template>
<v-app id="keep">
    <v-navigation-drawer v-if="$auth.check()" v-model="drawer" fixed clipped class="grey lighten-4" app>
        <v-list dense class="grey lighten-4">
            <template>
                <v-list-tile to="/">
                    <v-list-tile-action>
                        <v-icon>person</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-content>
                        <v-list-tile-title class="grey--text">Профиль</v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
                <v-list-tile to="/orders">
                    <v-list-tile-action>
                        <v-icon>shopping_cart</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-content>
                        <v-list-tile-title class="grey--text">Заказы</v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
                <v-divider dark class="my-3"></v-divider>
                <v-list-tile href="/catalog">
                    <v-list-tile-action>
                        <v-icon>shopping_cart</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-content>
                        <v-list-tile-title class="grey--text">В магазин</v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
                <v-divider dark class="my-3"></v-divider>
                <v-list-tile @click.prevent="logout()">
                    <v-list-tile-action>
                        <v-icon>exit_to_app</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-content>
                        <v-list-tile-title class="grey--text">Выйти</v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
            </template>
        </v-list>
    </v-navigation-drawer>
    <v-toolbar color="amber" app clipped-left>
        <v-toolbar-side-icon @click="drawer = !drawer"></v-toolbar-side-icon>
        <span class="title ml-3 mr-5">Уралэнерготел</span>
        <v-spacer></v-spacer>
    </v-toolbar>
    <v-content>
        <router-view></router-view>
    </v-content>
</v-app>
</template>

<script>
export default {
    data: () => ({
        drawer: null,
    }),
    methods: {
        logout() {
            this.$auth.logout();
            this.$router.push('/login');
        },
    },
}
</script>
<style lang="scss">
#keep {
    .v-navigation-drawer__border {
        display: none;
    }
}
</style>
