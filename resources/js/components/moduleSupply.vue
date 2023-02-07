<template>
    <div class="module-supply-wrap">
        <h1>Нам доверяют</h1>
        <div v-show="progress" class="update-message">Идет обновление...</div>
        <div v-show="error" class="error-message">{{ errorMessage }}</div>
        <div v-show="success" class="success-message">{{ successMessage }}</div>
        <draggable v-model="customers" @change="changeSort" class="drag-area" draggable=".draggable">
            <div v-for="(customer, index) in customers" :key="customer.id" class="customer draggable">
                <form @submit.prevent>
                    <img :src="customer.logo" :alt="customer.name">
                    <input type="text" name="name" v-model="customer.name">
                    <div class="show-on-site">
                        <v-btn dark @click="changeActive(customer.id)">
                            <v-icon left>{{ customer.active ? 'mdi-eye-off' : 'mdi-eye' }}</v-icon>
                            {{ customer.active ? 'Скрыть с сайта' : 'Показать на сайте' }}
                        </v-btn>
                        <v-btn icon class="icon-button" @click="deleteCustomer(customer.id)"><v-icon>mdi-delete</v-icon></v-btn>
                        <v-btn icon class="icon-button" @click="saveName(index)"><v-icon>mdi-content-save</v-icon></v-btn>
                    </div>
                </form>
            </div>
            <div slot="footer" class="customer new">
                <form @submit.prevent>
                    <vue-dropzone id="dropzone" ref="dropzone" :options="dropzoneImageOptions" @vdropzone-complete="saveLink"></vue-dropzone>
                    <input type="text" name="name" v-model="newCustomer.name">
                    <div class="show-on-site">
                        <v-btn dark @click="createCustomer">
                            Create
                        </v-btn>
                    </div>
                </form>
            </div>
        </draggable>
    </div>
</template>

<script>
export default {
    components: {
        vueDropzone: vue2Dropzone,
        draggable: VueDraggable
    },
    data () {
        return {
            progress: false,
            error: false,
            errorMessage: String,
            success: false,
            successMessage: String,
            customers: [],
            newCustomer: {},
            dropzoneImageOptions: {
                url: '/uploadCustomerImage',
                dictDefaultMessage: 'Загрузить изображение',
                dictCancelUpload: 'Отменить',
                dictRemoveFile: 'Очистить',
                maxFilesize: 10.0,
                maxFiles: 1,
                addRemoveLinks: true,
                uploadMultiple: false,
                acceptedFiles: ".png,.jpg,.gif,.bmp,.jpeg",
                headers: { "X-CSRF-Token": document.head.querySelector('meta[name="csrf-token"]').content },
                params: { id: this.propId },
            },
        }
    },
    methods: {
        fetchCustomers () {
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http
                    .get('/supply-customers')
                    .then(
                        function successCallback(response) {
                            this.customers = response.data
                        },
                        function errorCallback(response) {
                            this.progress = false;
                            this.error = true;
                            this.errorMessage = 'Ошибка';
                            setTimeout(() => {
                                this.error = false;
                            }, 3000);
                            this.fetchCustomers()
                        }
                    )
        },
        changeSort () {
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http
                    .post('/customers-change-sort', { customers: this.customers }, {emulateJSON:true})
                    .then(
                        function successCallback(response) {
                            this.progress = false;
                            this.success = true;
                            this.successMessage = 'Успешно';
                            setTimeout(() => {
                                this.success = false;
                            }, 3000);
                        },
                        function errorCallback(response) {
                            this.progress = false;
                            this.error = true;
                            this.errorMessage = 'Ошибка';
                            setTimeout(() => {
                                this.error = false;
                            }, 3000);
                            this.fetchCustomers()
                        }
                    )
        },
        changeActive (customerId) {
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http
                    .post('/customer-change-active/' + customerId)
                    .then(
                        function successCallback(response) {
                            this.progress = false;
                            this.success = true;
                            this.successMessage = 'Успешно';
                            setTimeout(() => {
                                this.success = false;
                            }, 3000);
                            this.fetchCustomers()
                        },
                        function errorCallback(response) {
                            this.progress = false;
                            this.error = true;
                            this.errorMessage = 'Ошибка';
                            setTimeout(() => {
                                this.error = false;
                            }, 3000);
                            this.fetchCustomers()
                        }
                    )
        },
        saveName (index) {
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http
                    .post('/customer-save-name/' + this.customers[index].id, {
                        name: this.customers[index].name
                    }, {emulateJSON: true})
                    .then(
                        function successCallback(response) {
                            this.progress = false;
                            this.success = true;
                            this.successMessage = 'Успешно';
                            setTimeout(() => {
                                this.success = false;
                            }, 3000);
                            this.fetchCustomers()
                        },
                        function errorCallback(response) {
                            this.progress = false;
                            this.error = true;
                            this.errorMessage = 'Ошибка';
                            setTimeout(() => {
                                this.error = false;
                            }, 3000);
                            this.fetchCustomers()
                        }
                    )
        },
        createCustomer () {
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http
                    .post('/customer-create', {
                        name: this.newCustomer.name,
                        logo: this.newCustomer.logo
                    }, {emulateJSON: true})
                    .then(
                        function successCallback(response) {
                            this.progress = false;
                            this.success = true;
                            this.successMessage = 'Успешно';
                            setTimeout(() => {
                                this.success = false;
                            }, 3000);
                            this.$refs.dropzone.removeAllFiles()
                            this.newCustomer.name = ''
                            this.newCustomer.logo = ''
                            this.fetchCustomers()
                        },
                        function errorCallback(response) {
                            this.progress = false;
                            this.error = true;
                            this.errorMessage = 'Ошибка';
                            setTimeout(() => {
                                this.error = false;
                            }, 3000);
                            this.fetchCustomers()
                        }
                    )
        },
        deleteCustomer (customerId) {
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http
                    .post('/customer-delete/' + customerId)
                    .then(
                        function successCallback(response) {
                            this.progress = false;
                            this.success = true;
                            this.successMessage = 'Успешно';
                            setTimeout(() => {
                                this.success = false;
                            }, 3000);
                            this.fetchCustomers()
                        },
                        function errorCallback(response) {
                            this.progress = false;
                            this.error = true;
                            this.errorMessage = 'Ошибка';
                            setTimeout(() => {
                                this.error = false;
                            }, 3000);
                            this.fetchCustomers()
                        }
                    )
        },
        saveLink(data) {
            this.newCustomer.logo = data.xhr.responseText
        }
    },
    created () {
        this.fetchCustomers()
    }
}
</script>

<style>

</style>