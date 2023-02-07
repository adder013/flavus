<template>
    <div class="delivery-edit">
        <div v-show="progress" id="global-message">
            Идет обновление...
        </div>
        <div v-for="delivery in data" class="city-block">
            <div :id="'slide_' + delivery.id" v-on:click="slide(delivery.id)" class="preview">
                <div class="country">{{ delivery.country }}</div>
                <div class="region">{{ delivery.region }}</div>
                <div class="city">{{ delivery.city }}</div>
                <div v-if="delivery.active" class="visibility"><img src="/svg/visibility.svg" alt="Активно"></div>
                <div v-if="delivery.url" class="has-url"><img src="/svg/link.svg" alt="Наличие URL"></div>
            </div>
            <form v-on:submit.prevent="updateCity(delivery)">
                <div class="on-off">
                    <span>Показывать в подвале:</span>
                    <input name="active" class="tgl tgl-flat" :id="'enabled_' + delivery.id" type="checkbox" v-model="delivery.active">
                    <label class="tgl-btn" :for="'enabled_' + delivery.id"></label>
                </div>
                <div class="input-wrap">
                    <div class="name">Страна:</div>
                    <input type="text" name="country" v-model="delivery.country" placeholder="Страна" required>
                </div>
                <div class="input-wrap">
                    <div class="name">Регион:</div>
                    <input type="text" name="region" v-model="delivery.region" placeholder="Регион" required>
                </div>
                <div class="input-wrap">
                    <div class="name">Город:</div>
                    <input type="text" name="city" v-model="delivery.city" placeholder="Город" required>
                </div>
                </label>
                <div class="input-wrap">
                    <div class="name">URL:</div>
                    <input type="text" name="url" v-model="delivery.url" placeholder="URL" required>
                </div>
                <div class="input-wrap">
                    <div class="name">Meta Title:</div>
                    <input type="text" name="metaTitle" v-model="delivery.metaTitle" placeholder="Meta Title">
                </div>
                <div class="textarea-wrap">
                    <div class="name">Meta Description:</div>
                    <textarea name="metaDescription" v-model="delivery.metaDescription" placeholder="Meta Description"></textarea>
                </div>
                <div class="textarea-wrap">
                    <div class="name">Адрес</div>
                    <textarea name="address" v-model="delivery.address" placeholder="Адрес"></textarea>
                </div>
                <div class="btn-wrap">
                    <div class="btn-sub-wrap">
                        <button type="submit"><i class="fas fa-hdd"></i><span>Обновить</span></button>
                    </div>
                    <div class="btn-sub-wrap">
                        <button v-on:click.prevent="deleteCity(delivery.id)" type="button"><i class="fas fa-trash"></i><span>Удалить</span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>
<script>
export default {
    name: 'delivery',
    data() {
        return {
            progress: false,
            data: {},
        };
    },
    methods: {
        slide(element) {
            $('#slide_' + element).next().slideToggle();
        },
        deleteCity(id) {
            this.progress = true;
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http.post('/deleteCity', { id: id }, {emulateJSON:true})
            .then(function() {
                this.$http.get('/getDeliveryData')
                .then(function(response) {
                    this.data = response.data;
                    this.progress = false;
                });
            });
        },
        updateCity(element) {
            if (element.active == true) {
                element.active = 1;
            } else {
                element.active = 0;
            }
            this.progress = true;
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http.post('/updateCity', { delivery: element }, {emulateJSON:true})
            .then(function() {
                this.$http.get('/getDeliveryData')
                .then(function(response) {
                    this.data = response.data;
                    this.progress = false;
                });
            });
        },
    },
    created: function() {
        this.$http.get('/getDeliveryData')
        .then(function(response) {
            this.data = response.data;
        });
    },
};
</script>
