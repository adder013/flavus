<template>
<div>
    <button class="md-button" @click="$refs.csv_categories.click()">
        <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 550.801 550.801"><path d="M475.084,131.992c-0.021-2.521-0.828-5.021-2.562-6.993L366.324,3.689c-0.031-0.035-0.062-0.045-0.084-0.077    c-0.633-0.706-1.371-1.284-2.151-1.803c-0.232-0.145-0.464-0.285-0.707-0.422c-0.675-0.367-1.392-0.665-2.13-0.886    c-0.201-0.063-0.38-0.145-0.58-0.197C359.87,0.114,359.037,0,358.193,0H97.2C85.282,0,75.6,9.693,75.6,21.601v507.6    c0,11.907,9.682,21.601,21.6,21.601H453.6c11.908,0,21.601-9.693,21.601-21.601V133.202    C475.2,132.791,475.137,132.393,475.084,131.992z M181.101,495.672c8.931,0,18.845-1.94,24.677-4.271l4.472,23.129    c-5.444,2.722-17.684,5.643-33.626,5.643c-45.291,0-68.618-28.191-68.618-65.506c0-44.709,31.88-69.589,71.529-69.589    c15.356,0,27.021,3.106,32.276,5.833l-6.033,23.514c-6.02-2.525-14.386-4.846-24.877-4.846c-23.517,0-41.784,14.186-41.784,43.331    C139.116,479.155,154.662,495.672,181.101,495.672z M261.776,520.172c-14.964,0-29.742-3.892-37.125-7.973l6.02-24.49    c7.976,4.082,20.218,8.163,32.854,8.163c13.605,0,20.798-5.643,20.798-14.196c0-8.163-6.217-12.824-21.963-18.457    c-21.766-7.583-35.955-19.627-35.955-38.675c0-22.359,18.658-39.467,49.565-39.467c14.771,0,25.66,3.106,33.428,6.613    l-6.602,23.909c-5.258-2.531-14.576-6.223-27.412-6.223c-12.825,0-19.045,5.833-19.045,12.636c0,8.369,7.38,12.055,24.303,18.468    c23.124,8.559,34.014,20.598,34.014,39.065C314.645,501.504,297.738,520.172,261.776,520.172z M400.18,518.216h-34.594    L323.6,387.213h32.463l15.937,55.403c4.472,15.546,8.554,30.512,11.665,46.844h0.58c3.301-15.747,7.383-31.298,11.854-46.259    l16.717-55.982h31.493L400.18,518.216z M97.2,366.752V21.601h250.192v110.521c0,5.962,4.842,10.8,10.801,10.8H453.6v223.837H97.2    V366.752z"/><path d="M377.188,170.058h-66.149h-2.31h-66.15l0,0h-65v29.223v2.193v27.032v2.312v26.924v2.302v29.226h68.462l0,0h131.27v-92.688    h-0.122V170.058z M243.728,286.971H179.89v-26.927h63.837V286.971z M243.728,257.742H179.89v-26.924h63.837V257.742z     M243.728,228.506H179.89v-26.913h62.688h1.149V228.506z M244.891,199.281v-26.913h63.838v26.913H246.04H244.891z     M374.604,286.569h-25.207v-77.098H332.09v77.098h-14.418v-61.13h-17.308v61.13h-12.698v-45.362h-17.31v45.362h-24.321v-26.525    v-2.302v-26.924v-2.312v-26.913h62.688h2.315h63.565V286.569z M374.878,196.581h-0.274v2.7h-63.565v-26.913h63.84V196.581z" /></svg>
        <span>Импортировать категории</span>
    </button>
    <input id="csv_categories" type="file" ref="csv_categories" class="hidden" multiple v-on:change="handleCategoriesCsv()" />
    <v-dialog v-model="dialog" fullscreen hide-overlay>
        <v-card dark>
            <v-toolbar dark color="black">
                <v-btn icon dark @click="dialog = false; disableAllFields = false">
                    <v-icon>close</v-icon>
                </v-btn>
                <v-toolbar-title>Загружаемый файл:<span v-for="name in csvCategoriesFileName"> {{ name }} </span></v-toolbar-title>
                <v-spacer></v-spacer>
                <v-toolbar-items v-if="disableAllFields && (categoriesLengthUploaded != categoriesBody.length)" class="d-flex align-center mr-4">
                    <span class="mr-4">
                        Загружено {{ categoriesLengthUploaded }} из {{ categoriesBody.length }}
                    </span>
                    <span class="mr-2">
                        <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" viewBox="0 0 21.664 21.665">
                        	<path d="M2.756,20.725h2.95c0.041,0.257,0.254,0.458,0.523,0.458h6.707c0.27,0,0.482-0.2,0.523-0.458h2.95
                        		c0.499,0,0.903-0.404,0.903-0.903H1.854C1.854,20.321,2.258,20.725,2.756,20.725z"/>
                        	<path d="M20.865,11.444c-0.752-0.609-1.811-0.619-2.508-0.542c0.02-0.486,0.031-0.983,0.031-1.5H0c0,4.97,0.752,8.556,5.511,9.894
                        		h7.366c1.885-0.529,3.135-1.418,3.964-2.6c1.806-0.035,4.711-0.746,4.82-3.24C21.708,12.364,21.254,11.758,20.865,11.444z
                        		 M17.598,15.27c0.346-0.889,0.551-1.889,0.664-2.988c0.488-0.08,1.329-0.131,1.754,0.215c0.078,0.064,0.321,0.262,0.293,0.901
                        		C20.252,14.69,18.648,15.124,17.598,15.27z"/>
                        	<path d="M7.491,8.704c0,0,3.5-0.257,1.896-3.208c-1.288-2.369-0.994-3.759,0.654-5.015c0,0-5.398,1.375-2.25,5.63
                        		C8.946,7.965,7.491,8.704,7.491,8.704z"/>
                        	<path d="M9.85,8.468c0,0,2.804-0.591,1.278-2.846c-0.554-0.978,0.21-1.327,0.21-1.327s-1.805,0.057-1.043,1.608
                        		C10.905,7.15,10.724,7.858,9.85,8.468z"/>
                        </svg>
                    </span>
                    {{ ((categoriesLengthUploaded/categoriesBody.length)*100).toFixed(2) + '%' }}
                </v-toolbar-items>
                <v-toolbar-items v-if="categoriesFinished" class="d-flex align-center mr-4">
                    <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" viewBox="0 0 19.118 19.118">
                        <path d="M16.981,0H2.137C1.731,0,1.401,0.33,1.401,0.736v17.646c0,0.408,0.33,0.736,0.736,0.736h14.843
                            c0.406,0,0.736-0.328,0.736-0.736V0.736C17.717,0.329,17.386,0,16.981,0z M16.245,17.646H2.873V1.473h13.371V17.646z"/>
                        <path d="M7.64,4.668H4.946v2.693h2.693V4.668H7.64z M7.312,5.562L6.116,6.758
                            c-0.031,0.032-0.084,0.032-0.115,0L5.272,6.026c-0.031-0.032-0.031-0.084,0-0.117l0.175-0.172c0.031-0.033,0.083-0.033,0.116,0
                            L6.06,6.236l0.963-0.963c0.033-0.032,0.084-0.032,0.117,0l0.173,0.174C7.345,5.478,7.345,5.53,7.312,5.562z"/>
                        <rect x="8.202" y="5.274" width="6.161" height="1.481"/>
                        <path d="M7.64,8.18H4.946v2.692h2.693V8.18H7.64z M7.312,9.073l-1.196,1.196
                            c-0.031,0.032-0.084,0.032-0.115,0L5.272,9.537c-0.031-0.032-0.031-0.084,0-0.116l0.175-0.173c0.031-0.032,0.083-0.032,0.116,0
                            L6.06,9.747l0.963-0.963c0.033-0.032,0.084-0.032,0.117,0l0.173,0.173C7.345,8.989,7.345,9.041,7.312,9.073z"/>
                        <rect x="8.202" y="8.785" width="6.161" height="1.481"/>
                        <rect x="4.947" y="11.769" width="2.693" height="2.693"/>
                        <rect x="8.202" y="12.376" width="6.161" height="1.48"/>
                    </svg>
                    Файл загружен
                </v-toolbar-items>
                <v-btn v-if="!disableAllFields" @click="uploadCategories()" :disabled="error || disableAllFields">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="play" class="svg-inline--fa fa-play fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z"></path></svg><span class="ml-3">Загрузить</span>
                </v-btn>
                <v-btn v-if="error == false && disableAllFields && (categoriesLengthUploaded != categoriesBody.length)" @click="stopLoad()">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="stop" class="svg-inline--fa fa-stop fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48z"></path></svg></i><span class="ml-3">Остановить загрузку</span>
                </v-btn>
            </v-toolbar>
            <v-progress-linear color="green lighten-2" background-color="blue lighten-1" v-model="((categoriesLengthUploaded/categoriesBody.length)*100).toFixed(2)"></v-progress-linear>
            <v-list class="pa-0 ma-0">
                <div class="csv-table-wrap">
                    <div class="csv-table">
                        <div class="head">
                            <div v-for="head in categoriesHead">
                                <v-autocomplete no-data-text="Не найдено" :class="headClass(head[0].text)" dark v-model="head[0].text" :items="categoriesPreloadedHead" item-text="name" @change="checkForErrors()"></v-autocomplete>
                            </div>
                        </div>
                        <div class="body">
                            <div class="content">
                                <div v-for="body in categoriesBody" class="product">
                                    <div :class="category.error ? 'error' : category.loading" v-for="category in body" :title="category.text">
                                        <input :disabled="disableAllFields" type="text" v-model="category.text" @change="checkForErrors()" @keyup.enter="checkForErrors()"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </v-list>
        </v-card>
    </v-dialog>
</div>
</template>
<script>
export default {
    name: 'upload-category',
    props: {
        userId: {
            type: Number,
            require: true
        },
    },
    data() {
        return {
            progress: false,
            csvCategories: [],
            csvCategoriesFileName: [],
            categoriesHead: [], // Array
            categoriesBody: [], // Array of objects
            categories: [],
            categoriesLengthUploaded: 0,
            dialog: false,
            error: false,
            disableAllFields: false,
            categoriesFinished: false,
        }
    },
    computed: {
        categoriesPreloadedHead() {
            let list = [
                { name: 'id', disabled: false },
                { name: 'parent_id', disabled: false },
                { name: 'Наименование', disabled: false },
                { name: 'URL', disabled: false },
                { name: 'Изображение', disabled: false },
                { name: 'Meta Title', disabled: false },
                { name: 'Meta Description', disabled: false },
                { name: 'Статус', disabled: false },
                { name: 'Отображать содержимое в основной категории', disabled: false },
                { name: 'Hide', disabled: false },
                { name: 'Описание', disabled: false },
                { name: 'sort_position', disabled: false },
                { name: 'Бренд', disabled: false }
            ];
            this.categoriesHead.forEach(
                (item) => {
                    list.forEach(
                    (list_item, index) => {
                        list_item.name == item[0].text ? list[index].disabled = true : '';
                    })
                });
            list.unshift({ name: '---', disabled: false });
            return list;
        },
    },
    watch: {
        categoriesLengthUploaded() {
            if (this.categoriesLengthUploaded == this.categoriesBody.length) {
                this.disableAllFields = false;
                this.categoriesLengthUploaded = 0;
                for (const item of this.categoriesBody) {
                    item.forEach(row => row.loading = 'waiting');
                }
                this.categoriesFinished = true;
            }
        },
    },
    methods: {
        stopLoad() {
            this.disableAllFields = false
            setTimeout(() => {;
                this.categoriesLengthUploaded = 0;
                for (const item of this.categoriesBody) {
                    item.forEach(row => row.loading = 'waiting');
                }
            }, 1000);
        },
        headClass(head) {
            let list = [
                { name: 'id', disabled: false },
                { name: 'parent_id', disabled: false },
                { name: 'Наименование', disabled: false },
                { name: 'URL', disabled: false },
                { name: 'Изображение', disabled: false },
                { name: 'Meta Title', disabled: false },
                { name: 'Meta Description', disabled: false },
                { name: 'Статус', disabled: false },
                { name: 'Отображать содержимое в основной категории', disabled: false },
                { name: 'Hide', disabled: false },
                { name: 'Описание', disabled: false },
                { name: 'sort_position', disabled: false },
                { name: 'Бренд', disabled: false }
            ];
            let error = 'error';
            list.forEach(
                (item) => {
                    item.name == head ? error = '' : '';
                });
            return error;
        },
        handleCategoriesCsv() {
            this.csvCategories = [];
            let uploadedFiles = this.$refs.csv_categories.files;
            for (var i = 0; i < uploadedFiles.length; i++) {
                this.csvCategories.push(uploadedFiles[i]);
            }
            this.onSubmitCategories();
        },
        checkForErrors() {
            axios.post('/api/csv/check/categories', {
                categoriesHeader: this.categoriesHead,
                categories: this.categoriesBody,
            }).then(
                (success) => {
                    this.categoriesHead = [];
                    this.categoriesBody = [];
                    success.data.csv[0].forEach((item) => this.categoriesHead.push([item]))
                    for (let i = 1; i < success.data.csv.length; i++) {
                        this.categoriesBody.push(success.data.csv[i]);
                    }
                    this.dialog = true;
                    this.error = success.data.errors;
                },
                (error) => {
                    console.error(error);
                }
            )
        },
        onSubmitCategories() {
            let formData = new FormData();
            for (var i = 0; i < this.csvCategories.length; i++) {
                let file = this.csvCategories[i];
                formData.append('files[' + i + ']', file);
            }
            axios.post('/api/csv/prepare/categories', formData).then(
                (success) => {
                    this.categoriesHead = [];
                    this.categoriesBody = [];
                    this.categoriesLengthUploaded = 0;
                    this.csvCategoriesFileName = [];
                    let uploadedFiles = this.$refs.csv_categories.files;
                    for (var i = 0; i < uploadedFiles.length; i++) {
                        this.csvCategoriesFileName.push(uploadedFiles[i].name);
                    }
                    success.data.csv[0].forEach((item) => this.categoriesHead.push([item]))
                    for (let i = 1; i < success.data.csv.length; i++) {
                        this.categoriesBody.push(success.data.csv[i]);
                    }
                    this.categoriesBody.pop();
                    this.dialog = true;
                    this.error = success.data.errors;
                    var file = document.getElementById('csv_categories');
                    file.value = file.defaultValue;
                },
                (error) => {
                    console.error(error);
                    var file = document.getElementById('csv_categories');
                    file.value = file.defaultValue;
                }
            )
        },
        categoriesRepeat(items) {
            let repeat = [];
            setTimeout(async () => {
                for (const item of items) {
                    if (this.disableAllFields) {
                    item.forEach(row => row.loading = 'loading');
                        await axios.post('/api/csv/upload/category', {
                            categoriesHeader: this.categoriesHead,
                            categories: item,
                            user: this.userId,
                        }).then(
                            (success) => {
                                item.forEach(row => row.loading = 'loaded');
                                this.categoriesLengthUploaded++;
                            },
                            (error) => {
                                item.forEach(row => row.loading = 'problem');
                                repeat.push(item);
                                console.log('Не удалось загрузить категорию, ожидайте повтора.');
                            }
                        )
                    }
                }
                if (repeat.length > 0) {
                    this.categoriesRepeat(repeat);
                }
            }, 10000);
        },
        async uploadCategories() {
            this.categoriesFinished = false;
            this.categoriesLengthUploaded = 0;
            this.disableAllFields = true;
            let repeat = [];
            for (const item of this.categoriesBody) {
                if (this.disableAllFields) {
                item.forEach(row => row.loading = 'loading');
                    await axios.post('/api/csv/upload/category', {
                        categoriesHeader: this.categoriesHead,
                        categories: item,
                        user: this.userId,

                    }).then(
                        (success) => {
                            item.forEach(row => row.loading = 'loaded');
                            this.categoriesLengthUploaded++;
                        },
                        (error) => {
                            item.forEach(row => row.loading = 'problem');
                            repeat.push(item);
                            console.log('Не удалось загрузить категорию, ожидайте повтора.');
                        }
                    )
                }
            }
            this.categoriesRepeat(repeat);
        },
    },
    created() {
        axios('/api/categories').then(
            (success) => {
                this.categories = success.data;
            },
            (error) => {
                console.error(error)
            }
        )
    }
}
</script>
<style scoped="scss">
.theme--dark.v-sheet {
    background-color: black !important;
}
</style>
