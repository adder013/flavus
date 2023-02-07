<template>
    <div class="module-brands-wrap">
        <h1>Бренды на главной странице</h1>
        <div class="brands-blocks">
            <form v-on:change="change()" class="brand">
                <select v-model="info.b1">
                    <option disabled>Не выбрано</option>
                    <option v-for="brand in brands" v-bind:value="brand.name" v-html="brand.name" :selected="info.b1"></option>
                </select>
            </form>
            <form v-on:change="change()" class="brand">
                <select v-model="info.b2">
                    <option disabled>Не выбрано</option>
                    <option v-for="brand in brands" v-bind:value="brand.name" v-html="brand.name" :selected="info.b2"></option>
                </select>
            </form>
            <form v-on:change="change()" class="brand">
                <select v-model="info.b3">
                    <option disabled>Не выбрано</option>
                    <option v-for="brand in brands" v-bind:value="brand.name" v-html="brand.name" :selected="info.b3"></option>
                </select>
            </form>
            <form v-on:change="change()" class="brand">
                <select v-model="info.b4">
                    <option disabled>Не выбрано</option>
                    <option v-for="brand in brands" v-bind:value="brand.name" v-html="brand.name" :selected="info.b4"></option>
                </select>
            </form>
            <form v-on:change="change()" class="brand">
                <select v-model="info.b5">
                    <option disabled>Не выбрано</option>
                    <option v-for="brand in brands" v-bind:value="brand.name" v-html="brand.name" :selected="info.b5"></option>
                </select>
            </form>
            <form v-on:change="change()" class="brand">
                <select v-model="info.b6">
                    <option disabled>Не выбрано</option>
                    <option v-for="brand in brands" v-bind:value="brand.name" v-html="brand.name" :selected="info.b6"></option>
                </select>
            </form>
            <form v-on:change="change()" class="brand">
                <select v-model="info.b7">
                    <option disabled>Не выбрано</option>
                    <option v-for="brand in brands" v-bind:value="brand.name" v-html="brand.name" :selected="info.b7"></option>
                </select>
            </form>
            <form v-on:change="change()" class="brand">
                <select v-model="info.b8">
                    <option disabled>Не выбрано</option>
                    <option v-for="brand in brands" v-bind:value="brand.name" v-html="brand.name" :selected="info.b8"></option>
                </select>
            </form>
            <form v-on:change="change()" class="brand">
                <select v-model="info.b9">
                    <option disabled>Не выбрано</option>
                    <option v-for="brand in brands" v-bind:value="brand.name" v-html="brand.name" :selected="info.b9"></option>
                </select>
            </form>
            <form v-on:change="change()" class="brand">
                <select v-model="info.b10">
                    <option disabled>Не выбрано</option>
                    <option v-for="brand in brands" v-bind:value="brand.name" v-html="brand.name" :selected="info.b10"></option>
                </select>
            </form>
            <form v-on:change="change()" class="brand">
                <select v-model="info.b11">
                    <option disabled>Не выбрано</option>
                    <option v-for="brand in brands" v-bind:value="brand.name" v-html="brand.name" :selected="info.b11"></option>
                </select>
            </form>
            <form v-on:change="change()" class="brand">
                <select v-model="info.b12">
                    <option disabled>Не выбрано</option>
                    <option v-for="brand in brands" v-bind:value="brand.name" v-html="brand.name" :selected="info.b12"></option>
                </select>
            </form>
            <form v-on:change="change()" class="brand">
                <select v-model="info.b13">
                    <option disabled>Не выбрано</option>
                    <option v-for="brand in brands" v-bind:value="brand.name" v-html="brand.name" :selected="info.b13"></option>
                </select>
            </form>
            <form v-on:change="change()" class="brand">
                <select v-model="info.b14">
                    <option disabled>Не выбрано</option>
                    <option v-for="brand in brands" v-bind:value="brand.name" v-html="brand.name" :selected="info.b14"></option>
                </select>
            </form>
            <form v-on:change="change()" class="brand">
                <select v-model="info.b15">
                    <option disabled>Не выбрано</option>
                    <option v-for="brand in brands" v-bind:value="brand.name" v-html="brand.name" :selected="info.b15"></option>
                </select>
            </form>
            <form v-on:change="change()" class="brand">
                <select v-model="info.b16">
                    <option disabled>Не выбрано</option>
                    <option v-for="brand in brands" v-bind:value="brand.name" v-html="brand.name" :selected="info.b16"></option>
                </select>
            </form>
            <form v-on:change="change()" class="brand">
                <select v-model="info.b17">
                    <option disabled>Не выбрано</option>
                    <option v-for="brand in brands" v-bind:value="brand.name" v-html="brand.name" :selected="info.b17"></option>
                </select>
            </form>
        </div>
    </div>
</template>
<script>
export default {
    name: 'module-home-brands',
    data() {
        return {
            info: {

            },
            brands: {},
    	};
    },
    methods: {
        change() {
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http.post('/changeHomeBrands', { brands: this.info }, {emulateJSON:true})
            .then(function() {
                this.$http.get('/getHomePageBrands')
                    .then(function(response) {
                        this.info = response.data.info;
                        this.brands = response.data.brands;
                    });
            });
        },
    },
    created: function() {
    this.$http.get('/getHomePageBrands')
        .then(function(response) {
            this.info = response.data.info;
            this.brands = response.data.brands;
        });
    },
    mounted() {
  	},
};
</script>
