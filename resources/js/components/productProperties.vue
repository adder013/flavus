<template>
    <div class="shop-wrap">
        <div class="product-properties">
            <div class="prop-block">
                <a v-bind:href="'/dashboard/properties/' + propUrl" class="prop-settings"><i class="fas fa-cog"></i></a>
                <h2>{{ propName }}<span>({{ propUrl }})</span></h2>
                <hr>
                <div class="option-type">Тип опции: {{ propType }}</div>
                <div v-if="propTypeId != 3" class="available-options">
                    Доступные опции:
                    <select>
                        <option v-for="property in properties">{{ property.value }}</option>
                    </select>
                </div>
                <div v-if="propTypeId != 3" class="add-prop">
                    Добавить опцию:
                    <form v-on:submit.prevent="onSubmit" method="POST">
                        <input type="text" v-model="dataform.name" placeholder="Введите опцию">
                        <input type="submit" value="Добавить">
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'product-properties',
        props: {
            propUrl: String,
            propName: String,
            propTypeId: String,
            propType: String,
        },
        data() {
            return {
                dataform: {},
                properties: [],
            }
        },
        methods: {
            onSubmit: function() {
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/addProperties', {propertyName: this.propUrl, propertyValue: this.dataform.name}, {emulateJSON:true})
                .then(function() {
                    this.$http.get('/getProperties/' + this.propUrl)
                    .then(function(response) {
                        this.properties = response.data;
                        this.dataform.name = '';
                    });
                });
            }
        },
        created: function() {
            this.$http.get('/getProperties/' + this.propUrl)
            .then(function(response) {
                this.properties = response.data;
            });
        },
        mounted() {

        }
    }
</script>
