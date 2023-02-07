<template>
    <div class="specials">
        <div v-show="progress" id="global-message">
            Идет обновление...
        </div>
        <div class="on-off">
            <span>Отображать на сайте:</span>
            <input type="checkbox" v-on:change="enable(active)" id="enable" class="tgl tgl-flat" v-model="active">
            <label class="tgl-btn" for="enable"></label>
        </div>
        <div class="stickers">
            <select v-on:change="stickerChanged()" v-model="info.stickerSelected">
                <option value="0" :selected="info.noStickers">Нет Стикера</option>
                <option v-for="sticker in info.stickers" v-bind:value="sticker.id" v-html="sticker.text" :selected="sticker.selected"></option>
            </select>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'specials',
        props: {
            propId: String,
        },
        data() {
            return {
                progress: false,
                active: Boolean,
                info: {},
            }
        },
        methods: {
            enable(status) {
                if (status == true) {
                    status = 1;
                } else {
                    status = 0;
                }
                this.progress = true;
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/enableSpecial', { special_id: this.propId, enable: status }, {emulateJSON:true})
                .then(function() {
                    this.$http.get('/getSpecialsData/' + this.propId)
                    .then(function(response) {
                        this.info = response.data;
                        this.progress = false;
                    });
                });
            },
            stickerChanged() {
                this.progress = true;
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/updateSpecialSticker', { special_id: this.propId, sticker_id: this.info.stickerSelected }, {emulateJSON:true})
                .then(function() {
                    this.$http.get('/getSpecialsData/' + this.propId)
                    .then(function(response) {
                        this.info = response.data;
                        this.progress = false;
                    });
                });
            }
        },
        created() {
            this.$http.get('/getSpecialsData/' + this.propId)
            .then(function(response) {
                this.info = response.data;
                this.active = response.data['active'];
            });
        }
    }
</script>
