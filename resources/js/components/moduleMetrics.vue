<template>
    <div class="module-robots-wrap">
        <h1>Метрика</h1>
        <div v-show="progress" class="update-message">
            <img src="/svg/loading_dashboard.svg" alt="Загрузка">
        </div>
        <div v-show="error" class="error-message">
            {{ errorMessage }}
        </div>
        <div v-show="success" class="success-message">
            <img src="/svg/success_dashboard.svg" alt="Успешно">
        </div>
        <form v-on:submit.prevent="updateMetrics" class="update-robots">
            <textarea v-model="metrics" placeholder="Коды счетчиков"></textarea>
            <button><i class="fas fa-hdd"></i><span>Обновить</span></button>
        </form>
    </div>
</template>
<script>
    export default {
        name: 'module-metrics',
        data() {
            return {
                progress: false,
                error: false,
                errorMessage: String,
                success: false,
                successMessage: String,
                metrics: '',
            }
        },
        methods: {
            updateMetrics() {
                this.success = false;
                this.error = false;
                this.progress = true;
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/updateMetrics', { metrics: this.metrics }, { emulateJSON:true })
                .then(function(response) {
                    this.progress = false;
                    if (response.data.success) {
                        this.success = true;
                        this.successMessage = response.data.message;
                        setTimeout(() =>{
                            this.success = false;
                        }, 3000);
                        this.$http.get('/getMetrics')
                        .then(function(response) {
                            this.metrics = JSON.parse(response.data);
                        });
                    } else {
                        this.error = true;
                        this.errorMessage = response.data.message
                        setTimeout(() =>{
                            this.error = false;
                        }, 3000);
                    }
                });
            },
        },
        created: function() {
            this.$http.get('/getMetrics')
            .then(function(response) {
                this.metrics = JSON.parse(response.data);
            });
        },
    }
</script>
