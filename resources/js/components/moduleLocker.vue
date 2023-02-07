<template>
    <div class="module-lockers-wrap">
        <div v-show="progress" class="update-message">
            <img src="/svg/loading_dashboard.svg" alt="Загрузка">
        </div>
        <div v-show="error" class="error-message">
            {{ errorMessage }}
        </div>
        <div v-show="success" class="success-message">
            <img src="/svg/success_dashboard.svg" alt="Успешно">
        </div>
        <h1><a :href="'/shkafy-individualnoi-sborki/' + locker.url">{{ locker.name }}</a></h1>
        <div class="breadcrumb">
            <div class="breadcrumb-btn">
                <a href="/dashboard/modules/">Модули</a>
            </div>
            <div class="breadcrumb-btn">
                <a href="/dashboard/modules/lockers/">Шкафы индивидуальной сборки</a>
            </div>
            <div class="breadcrumb-btn">
                <a :href="'/dashboard/modules/lockers/' + locker.id">{{ locker.name }}</a>
            </div>
        </div>
        <div class="locker">
            <div class="data-left">
                <div class="locker-list">
                    <div class="block-img">
                        <img v-if="locker.image" onerror="this.src='/img/placeholder.jpg'" :src="locker.image" :alt="locker.name">
                        <img v-else src="/img/placeholder.jpg" :alt="locker.name">
                    </div>
                    <button type="button" v-on:click="selectImage()"><i class="fas fa-images"></i><span>Изменить изображение</span></button>
                    <div class="on-off">
                        <span>Отображать на сайте</span>
                        <input v-on:click="updateLocker()" id="enable-locker" class="tgl tgl-flat" type="checkbox" v-model="locker.active" :disabled="progress">
                        <label class="tgl-btn" for="enable-locker"></label>
                    </div>
                    <button v-on:click="updateLocker()" type="button"><i class="fas fa-hdd"></i><span>Обновить</span></button>
                    <button v-on:click="deleteLocker()" type="button"><i class="fas fa-trash"></i><span>Удалить</span></button>
                </div>
            </div>
            <div class="data-right">
                <form v-on:submit.prevent="updateLocker()" class="edit-locker">
                    <div class="block-input">
                        <div class="name">Название:</div>
                        <input type="text" v-model="locker.name" placeholder="Название" required>
                    </div>
                    <div class="block-input">
                        <div class="name">URL:</div>
                        <input type="text" v-model="locker.url" placeholder="URL" required>
                    </div>
                    <div class="block-input">
                        <div class="name">Meta Title:</div>
                        <input type="text" v-model="locker.meta_title" placeholder="Meta Title">
                    </div>
                    <div class="block-input">
                        <div class="name">Meta Description:</div>
                        <input type="text" v-model="locker.meta_description" placeholder="Meta Description">
                    </div>
                    <div class="block-textarea">
                        <div class="body">И другие шкафы:</div>
                        <textarea v-model="locker.order_bottom_text" placeholder="Качество сборки, текст"></textarea>
                    </div>
                    <div class="block-textarea">
                        <div class="body">Превью:</div>
                        <textarea v-model="locker.more_text" placeholder="Превью"></textarea>
                    </div>
                    <div class="block-input">
                        <div class="name">Заголовок таблицы:</div>
                        <input type="text" v-model="locker.table_header" placeholder="Заголовок таблицы">
                    </div>
                    <div class="block-input">
                        <div class="name">Мы используем оборудование:</div>
                        <input type="text" v-model="locker.slider_block_header" placeholder="Мы используем оборудование">
                    </div>
                    <div class="block-textarea">
                        <div class="body">Список оборудования:</div>
                        <textarea v-model="locker.slider_block_text" placeholder="Список оборудования"></textarea>
                    </div>
                </form>
            </div>
        </div>
        <div class="locker-slider">
            <h2>Слайдер со шкафами</h2>
            <form v-on:submit.prevent="addSlider" class="add-slider">
                <input type="text" name="name" v-model="newSlider.name" placeholder="Название" autocomplete="off" required>
                <input type="text" name="customer" v-model="newSlider.customer" placeholder="Заказчик" autocomplete="off">
                <button><i class="fas fa-plus-square"></i><span>Добавить</span></button>
            </form>
            <draggable :list="locker.sliders" class="draggable" @change="sortSliders">
                <div v-for="slider in locker.sliders" class="slider">
                    <div class="image-wrap">
                        <img :src="slider.image" alt="">
                    </div>
                    <div class="block-input">
                        <input type="text" v-model="slider.image" placeholder="Название" disabled>
                    </div>
                    <button class="img-change" type="button" v-on:click="selectSliderImage(slider)"><i class="fas fa-images"></i><span>Изменить изображение</span></button>
                    <div class="block-input">
                        <div class="name">Название:</div>
                        <input type="text" v-model="slider.name" placeholder="Название">
                    </div>
                    <div class="block-input">
                        <div class="name">Заказчик:</div>
                        <input type="text" v-model="slider.customer" placeholder="Заказчик">
                    </div>
                    <div class="block-textarea">
                        <div class="body">Описание:</div>
                        <textarea v-model="slider.description" placeholder="Описание"></textarea>
                    </div>
                    <button v-on:click="updateSlider(slider)" type="button"><i class="fas fa-hdd"></i><span>Обновить</span></button>
                    <button v-on:click="deleteSlider(locker.sliders.map(function(e) { return e.id; }).indexOf(slider.id), slider.id)" type="button"><i class="fas fa-trash"></i><span>Удалить</span></button>
                </div>
            </draggable>
        </div>
        <div class="locker-orders">
            <h2>Шкафы для заказа</h2>
            <form v-on:submit.prevent="addOrder" class="add-order">
                <input type="text" name="name" v-model="newOrder.order_option" placeholder="Название шкафа" autocomplete="off" required>
                <button><i class="fas fa-plus-square"></i><span>Добавить</span></button>
            </form>
            <draggable :list="locker.orders" class="draggable" @change="sortOrders">
                <div v-for="order in locker.orders" class="orders-list">
                    <input type="text" v-model="order.order_option" placeholder="Название шкафа" required>
                    <button v-on:click="deleteOrder(locker.orders.map(function(e) { return e.id; }).indexOf(order.id), order.id)" type="button"><i class="fas fa-trash"></i></button>
                </div>
            </draggable>
            <button v-on:click="updateOrders()" type="button"><i class="fas fa-hdd"></i><span>Обновить шкафы для заказа</span></button>
        </div>
        <div class="locker-tables">
            <h2>{{ locker.table_header || "Таблица" }}</h2>
            <form v-on:submit.prevent="addTable" class="add-table">
                <input type="text" name="year" v-model="newTable.year" placeholder="Год" autocomplete="off" required>
                <input type="text" name="customer" v-model="newTable.customer" placeholder="Заказчик" autocomplete="off">
                <button><i class="fas fa-plus-square"></i><span>Добавить</span></button>
            </form>
            <draggable :list="locker.tables" class="draggable" @change="sortTables">
                <div v-for="table in locker.tables" class="slider">
                    <div class="block-input">
                        <div class="name">Год:</div>
                        <input type="text" v-model="table.year" placeholder="Год" required>
                    </div>
                    <div class="block-input">
                        <div class="name">Заказчик:</div>
                        <input type="text" v-model="table.customer" placeholder="Заказчик">
                    </div>
                    <div class="block-textarea">
                        <div class="body">Объект:</div>
                        <textarea v-model="table.object" placeholder="Объект"></textarea>
                    </div>
                    <div class="block-textarea">
                        <div class="body">Изделия:</div>
                        <textarea v-model="table.item" placeholder="Изделия"></textarea>
                    </div>
                    <button v-on:click="updateTable(table)" type="button"><i class="fas fa-hdd"></i><span>Обновить</span></button>
                    <button v-on:click="deleteTable(locker.tables.map(function(e) { return e.id; }).indexOf(table.id), table.id)" type="button"><i class="fas fa-trash"></i><span>Удалить</span></button>
                </div>
            </draggable>
        </div>
        <div class="locker-images">
            <h2>Блок фотографий</h2>
            <div class="images">
                <div v-for="image in locker.images" class="image-block">
                    <div class="img-wrap">
                        <img :src="image.image_path" :alt="image.id">
                    </div>
                    <button v-on:click="deleteImage(locker.images.map(function(e) { return e.id; }).indexOf(image.id), image.id)" type="button"><i class="fas fa-trash"></i><span>Удалить</span></button>
                </div>
            </div>
            <button type="button" v-on:click="addImage(1)"><i class="fas fa-images"></i><span>Добавить изображение</span></button>
        </div>
        <div class="locker-images">
            <h2>Слайдер с брендами</h2>
            <div class="images">
                <div v-for="brand in locker.brands" class="image-block-brands">
                    <div class="img-wrap">
                        <img :src="brand.image_path" :alt="brand.id">
                    </div>
                    <input type="text" v-model="brand.alt_name" placeholder="ALT Name">
                    <input type="text" v-model="brand.url" placeholder="URL">
                    <button v-on:click="updateImageBrand(brand)" type="button"><i class="fas fa-hdd"></i><span>Обновить</span></button>
                    <button v-on:click="deleteImage(locker.brands.map(function(e) { return e.id; }).indexOf(brand.id), brand.id)" type="button"><i class="fas fa-trash"></i><span>Удалить</span></button>
                </div>
            </div>
            <button type="button" v-on:click="addImage(2)"><i class="fas fa-images"></i><span>Добавить изображение</span></button>
        </div>
    </div>
</template>
<script>
    function getKey(data) {
        for (var prop in data) {
            return prop;
        }
    }
    export default {
        name: 'module-locker',
        props: {
            lockerId: {
                type: Number,
                require: true
            },
        },
        components: {
            draggable: VueDraggable
        },
        data() {
            return {
                progress: false,
                error: false,
                errorMessage: String,
                success: false,
                successMessage: String,
                newSlider: {
                    locker_id: this.lockerId,
                    name: '',
                    customer: '',
                },
                newOrder: {
                    locker_id: this.lockerId,
                    order_option: '',
                },
                newTable: {
                    locker_id: this.lockerId,
                    year: '',
                    customer: '',
                },
                locker: {},
            }
        },
        methods: {
            updateImageBrand(brand) {
                this.success = false;
                this.error = false;
                this.progress = true;
                brand.locker_id = this.lockerId;
                this.$http.patch('/api/LockerImages/' + brand.id, brand)
                .then(response => {
                    this.progress = false;
                    this.success = true;
                    setTimeout(() =>{
                        this.success = false;
                    }, 3000);
                }, error => {
                    console.log(error);
                    this.progress = false;
                    this.error = true;
                    this.errorMessage = error.data.errors[getKey(error.data.errors)][0];
                    setTimeout(() =>{
                        this.error = false;
                    }, 3000);
                })
            },
            deleteImage(index, id) {
                this.success = false;
                this.error = false;
                this.progress = true;
                this.$http.delete('/api/LockerImages/' + id)
                    .then(response => {
                        this.progress = false;
                        this.success = true;
                        this.locker.brands.splice(index, 1);
                        setTimeout(() =>{
                            this.success = false;
                        }, 3000);
                    }, error => {
                        console.log(error);
                        this.progress = false;
                        this.error = true;
                        this.errorMessage = error.data.errors[getKey(error.data.errors)][0];
                        setTimeout(() =>{
                            this.error = false;
                        }, 3000);
                    })
            },
            addTable() {
                this.success = false;
                this.error = false;
                this.progress = true;
                this.$http.put('/api/lockerTables', this.newTable)
                .then(response => {
                    this.progress = false;
                    this.success = true;
                    this.newTable.year = '';
                    this.newTable.customer = '';
                    this.locker.tables.push(response.data);
                    setTimeout(() =>{
                        this.success = false;
                    }, 3000);
                }, error => {
                    console.log(error);
                    this.progress = false;
                    this.error = true;
                    this.errorMessage = error.data.errors[getKey(error.data.errors)][0];
                    setTimeout(() =>{
                        this.error = false;
                    }, 3000);
                });
            },
            updateTable(table) {
                this.success = false;
                this.error = false;
                this.progress = true;
                table.locker_id = this.lockerId;
                this.$http.patch('/api/lockerTables/' + table.id, table)
                .then(response => {
                    this.progress = false;
                    this.success = true;
                    setTimeout(() =>{
                        this.success = false;
                    }, 3000);
                }, error => {
                    console.log(error);
                    this.progress = false;
                    this.error = true;
                    this.errorMessage = error.data.errors[getKey(error.data.errors)][0];
                    setTimeout(() =>{
                        this.error = false;
                    }, 3000);
                })
            },
            deleteTable(index, id) {
                this.success = false;
                this.error = false;
                this.progress = true;
                this.$http.delete('/api/lockerTables/' + id)
                    .then(response => {
                        this.progress = false;
                        this.success = true;
                        this.locker.tables.splice(index, 1);
                        setTimeout(() =>{
                            this.success = false;
                        }, 3000);
                    }, error => {
                        console.log(error);
                        this.progress = false;
                        this.error = true;
                        this.errorMessage = error.data.errors[getKey(error.data.errors)][0];
                        setTimeout(() =>{
                            this.error = false;
                        }, 3000);
                    })
            },
            addOrder() {
                this.success = false;
                this.error = false;
                this.progress = true;
                this.$http.put('/api/lockerOrders', this.newOrder)
                .then(response => {
                    this.progress = false;
                    this.success = true;
                    this.newOrder.order_option = '';
                    this.locker.orders.push(response.data);
                    setTimeout(() =>{
                        this.success = false;
                    }, 3000);
                }, error => {
                    console.log(error);
                    this.progress = false;
                    this.error = true;
                    this.errorMessage = error.data.errors[getKey(error.data.errors)][0];
                    setTimeout(() =>{
                        this.error = false;
                    }, 3000);
                });
            },
            updateOrders() {
                this.success = false;
                this.error = false;
                this.progress = true;
                this.$http.patch('/api/lockerOrders/', {
                    orders: this.locker.orders,
                    locker_id: this.lockerId,
                })
                .then(response => {
                    this.progress = false;
                    this.success = true;
                    setTimeout(() =>{
                        this.success = false;
                    }, 3000);
                }, error => {
                    console.log(error);
                    this.progress = false;
                    this.error = true;
                    this.errorMessage = error.data.errors[getKey(error.data.errors)][0];
                    setTimeout(() =>{
                        this.error = false;
                    }, 3000);
                })
            },
            deleteOrder(index, id) {
                this.success = false;
                this.error = false;
                this.progress = true;
                this.$http.delete('/api/lockerOrders/' + id)
                    .then(response => {
                        this.progress = false;
                        this.success = true;
                        this.locker.orders.splice(index, 1);
                        setTimeout(() =>{
                            this.success = false;
                        }, 3000);
                    }, error => {
                        console.log(error);
                        this.progress = false;
                        this.error = true;
                        this.errorMessage = error.data.errors[getKey(error.data.errors)][0];
                        setTimeout(() =>{
                            this.error = false;
                        }, 3000);
                    })
            },
            sortTables() {
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/api/sort/lockerTables/', {
                    tables: this.locker.tables
                })
                .then(response => {
                    this.progress = false;
                    this.success = true;
                    setTimeout(() =>{
                        this.success = false;
                    }, 3000);
                }, error => {
                    console.log(error);
                    this.progress = false;
                    this.error = true;
                    this.errorMessage = error.data.errors[getKey(error.data.errors)][0];
                    setTimeout(() =>{
                        this.error = false;
                    }, 3000);
                });
            },
            sortSliders() {
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/api/sort/lockerSliders/', {
                    sliders: this.locker.sliders
                })
                .then(response => {
                    this.progress = false;
                    this.success = true;
                    setTimeout(() =>{
                        this.success = false;
                    }, 3000);
                }, error => {
                    console.log(error);
                    this.progress = false;
                    this.error = true;
                    this.errorMessage = error.data.errors[getKey(error.data.errors)][0];
                    setTimeout(() =>{
                        this.error = false;
                    }, 3000);
                });
            },
            sortOrders() {
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/api/sort/lockerOrders/', {
                    orders: this.locker.orders
                })
                .then(response => {
                    this.progress = false;
                    this.success = true;
                    setTimeout(() =>{
                        this.success = false;
                    }, 3000);
                }, error => {
                    console.log(error);
                    this.progress = false;
                    this.error = true;
                    this.errorMessage = error.data.errors[getKey(error.data.errors)][0];
                    setTimeout(() =>{
                        this.error = false;
                    }, 3000);
                });
            },
            addSlider() {
                this.success = false;
                this.error = false;
                this.progress = true;
                this.$http.put('/api/lockerSliders', this.newSlider)
                .then(response => {
                    this.progress = false;
                    this.success = true;
                    this.newSlider.name = '';
                    this.newSlider.customer = '';
                    this.locker.sliders.push(response.data);
                    setTimeout(() =>{
                        this.success = false;
                    }, 3000);
                }, error => {
                    console.log(error);
                    this.progress = false;
                    this.error = true;
                    this.errorMessage = error.data.errors[getKey(error.data.errors)][0];
                    setTimeout(() =>{
                        this.error = false;
                    }, 3000);
                });
            },
            updateSlider(slider) {
                slider.locker_id = this.lockerId;
                this.$http.patch('/api/lockerSliders/' + slider.id, slider)
                .then(response => {
                    this.progress = false;
                    this.success = true;
                    setTimeout(() =>{
                        this.success = false;
                    }, 3000);
                }, error => {
                    console.log(error);
                    this.progress = false;
                    this.error = true;
                    this.errorMessage = error.data.errors[getKey(error.data.errors)][0];
                    setTimeout(() =>{
                        this.error = false;
                    }, 3000);
                })
            },
            deleteSlider(index, id) {
                this.success = false;
                this.error = false;
                this.progress = true;
                this.$http.delete('/api/lockerSliders/' + id)
                    .then(response => {
                        this.progress = false;
                        this.success = true;
                        this.locker.sliders.splice(index, 1);
                        setTimeout(() =>{
                            this.success = false;
                        }, 3000);
                    }, error => {
                        console.log(error);
                        this.progress = false;
                        this.error = true;
                        this.errorMessage = error.data.errors[getKey(error.data.errors)][0];
                        setTimeout(() =>{
                            this.error = false;
                        }, 3000);
                    })
            },
            selectImage() {
                var lfm = function(options, cb) {
                    var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
                    window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
                    window.SetUrl = cb;
                }
                lfm({type: 'image', prefix: ''}, (url, path) => {
                    Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                    this.$http.patch('/api/update/lockers/image', { path: path, id: this.lockerId })
                    .then(response => {
                        this.progress = false;
                        this.success = true;
                        this.locker.image = path;
                        setTimeout(() =>{
                            this.success = false;
                        }, 3000);
                    }, error => {
                        console.log(error);
                        this.progress = false;
                        this.error = true;
                        this.errorMessage = error.data.errors[getKey(error.data.errors)][0];
                        setTimeout(() =>{
                            this.error = false;
                        }, 3000);
                    })
                });
            },
            addImage(type) {
                var lfm = function(options, cb) {
                    var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
                    window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
                    window.SetUrl = cb;
                }
                lfm({type: 'image', prefix: ''}, (url, path) => {
                    Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                    this.$http.put('/api/LockerImages', {
                        path: path,
                        type: type,
                        locker_id: this.lockerId
                    })
                    .then(response => {
                        this.progress = false;
                        this.success = true;
                        switch(type) {
                            case 1:
                                this.locker.images.push(response.data);
                                break;
                            case 2:
                                this.locker.brands.push(response.data);
                                break;
                        }
                        setTimeout(() =>{
                            this.success = false;
                        }, 3000);
                    }, error => {
                        console.log(error);
                        this.progress = false;
                        this.error = true;
                        this.errorMessage = error.data.errors[getKey(error.data.errors)][0];
                        setTimeout(() =>{
                            this.error = false;
                        }, 3000);
                    })
                });
            },
            selectSliderImage(slider) {
                var lfm = function(options, cb) {
                    var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
                    window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
                    window.SetUrl = cb;
                }
                lfm({type: 'image', prefix: ''}, (url, path) => {
                    slider.image = path;
                });
            },
            updateLocker() {
                setTimeout(() => {
                    this.locker.active_id = this.locker.active != false ? 1 : 0;
                    this.$http.patch('/api/lockers/' + this.lockerId, this.locker)
                    .then(response => {
                        this.progress = false;
                        this.success = true;
                        setTimeout(() =>{
                            this.success = false;
                        }, 3000);
                    }, error => {
                        console.log(error);
                        this.progress = false;
                        this.error = true;
                        this.errorMessage = error.data.errors[getKey(error.data.errors)][0];
                        setTimeout(() =>{
                            this.error = false;
                        }, 3000);
                    })
                }, 10)
            },
            deleteLocker() {
                this.success = false;
                this.error = false;
                this.progress = true;
                this.$http.delete('/api/lockers/' + this.lockerId)
                    .then(response => {
                        this.progress = false;
                        this.success = true;
                        setTimeout(() =>{
                            this.success = false;
                            window.location.href = '/dashboard/modules/lockers';
                        }, 3000);
                    }, error => {
                        console.log(error);
                        this.progress = false;
                        this.error = true;
                        this.errorMessage = error.data.errors[getKey(error.data.errors)][0];
                        setTimeout(() =>{
                            this.error = false;
                        }, 3000);
                    })
            },
        },
        async created() {
            try {
                const locker = await this.$http.get('/api/lockers/' + this.lockerId);
                this.locker = locker.data;
                this.locker.active = this.locker.active != 1 ? false : true;
            } catch (error) {
                console.error(error);
            }
        },
    }
</script>
