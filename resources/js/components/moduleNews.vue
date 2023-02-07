<template>
<div class="news-vue">
    <h2>Изображения для слайдера</h2>
    <div class="uploaded-images">
        <div class="upd-img" v-for="image in images">
            <div class="img-wrap">
                <img :src="'/' + image" alt="Item_img">
            </div>
            <div class="wrap-img-btn">
                <button @click="deleteImg(image)"><i class="fas fa-trash"></i></button>
            </div>
        </div>
    </div>
    <vue-dropzone ref="myVueDropzone" id="dropzone" :options="dropzoneImageOptions" v-on:vdropzone-success="refresh()"></vue-dropzone>
</div>
</template>
<script>
export default {
    name: 'module-news',
    props: {
        propId: String,
    },
    components: {
        vueDropzone: vue2Dropzone
    },
    data() {
        return {
            dataform: {},
            images: {},
            locker_orders: [],
            locker_table: [],
            dropzoneImageOptions: {
                url: '/uploadNewsPreviewImgs',
                thumbnailWidth: 150,
                dictDefaultMessage: 'Загрузить изображения',
                dictCancelUpload: 'Отменить',
                dictRemoveFile: 'Очистить',
                maxFilesize: 10.0,
                addRemoveLinks: true,
                acceptedFiles: ".png,.jpg,.gif,.bmp,.jpeg",
                headers: { "X-CSRF-Token": document.head.querySelector('meta[name="csrf-token"]').content },
                params: { id: this.propId },
            },
    	};
    },
    methods: {
        deleteImg(img) {
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http.post('/deleteNewsPreviewImg', {id: this.propId, img: img }, {emulateJSON:true})
            .then(function() {
                this.$http.get('/getNewsPreviewImages/' + this.propId)
                .then(function(response) {
                    this.images = response.data;
                });
            });
        },
        refresh() {
            this.$http.get('/getNewsPreviewImages/' + this.propId)
            .then(function(response) {
                this.images = response.data;
            });
        },
    },
    created: function() {
        this.$http.get('/getNewsPreviewImages/' + this.propId)
        .then(function(response) {
            this.images = response.data;
        });
    },
    mounted() {
  	},
};
</script>
