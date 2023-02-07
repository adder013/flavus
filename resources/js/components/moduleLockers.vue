<template>
    <div class="module-lockers-wrap">
        <h1>Шкафы индивидуальной сборки</h1>
        <div v-show="progress" class="update-message">
            <img src="/svg/loading_dashboard.svg" alt="Загрузка">
        </div>
        <div v-show="error" class="error-message">
            {{ errorMessage }}
        </div>
        <div v-show="success" class="success-message">
            <img src="/svg/success_dashboard.svg" alt="Успешно">
        </div>
        <form v-on:submit.prevent="addLocker" class="add-locker">
            <input type="text" name="name" v-model="newLocker.name" placeholder="Название шкафа" autocomplete="off" required>
            <input type="text" name="url" v-model="newLocker.url" placeholder="URL" autocomplete="off" required>
            <button><i class="fas fa-plus-square"></i><span>Добавить</span></button>
        </form>
        <div class="lockers-wrap">
            <div v-for="locker in lockers" class="locker">
                <div class="img-wrap">
                    <img :src="locker.image" :alt="locker.name" />
                </div>
                <div class="name">{{ locker.name }}</div>
                <div class="btn-wrap">
                    <a :href="'/dashboard/modules/lockers/' + locker.id"><i class="fas fa-pen-square"></i><span>Редактировать</span></a>
                    <button v-on:click="deleteLocker(lockers.map(function(e) { return e.id; }).indexOf(locker.id), locker.id)"><i class="fas fa-trash"></i><span>Удалить</span></button>
                </div>
            </div>
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
        name: 'module-lockers',
        data() {
            return {
                progress: false,
                error: false,
                errorMessage: String,
                success: false,
                successMessage: String,
                lockers: {},
                newLocker: {
                    name: '',
                    url: '',
                }
            }
        },
        methods: {
            addLocker() {
                this.success = false;
                this.error = false;
                this.progress = true;
                this.$http.put('/api/lockers', this.newLocker)
                .then(response => {
                    this.progress = false;
                    this.success = true;
                    this.newLocker.name = '';
                    this.newLocker.url = '';
                    this.lockers.push(response.data);
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
            deleteLocker(index, id) {
                this.success = false;
                this.error = false;
                this.progress = true;
                this.$http.delete('/api/lockers/' + id)
                    .then(response => {
                        this.progress = false;
                        this.success = true;
                        this.lockers.splice(index, 1);
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
        },
        async created() {
            try {
                const lockers = await this.$http.get('/api/lockers');
                this.lockers = lockers.data;
            } catch (error) {
                console.error(error);
            }
        },
    }
</script>
