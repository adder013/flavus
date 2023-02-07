<template>
    <div class="module-slider-wrap">
        <div v-show="progress" class="update-message">
            <img src="/svg/loading_dashboard.svg" alt="Загрузка">
        </div>
        <div v-show="error" class="error-message">
            {{ errorMessage }}
        </div>
        <div v-show="success" class="success-message">
            <img src="/svg/success_dashboard.svg" alt="Успешно">
        </div>
        <h1>Слайдер (главная страница)</h1>
        <form v-on:submit.prevent="addSlider()" class="add-slider">
            <input v-on:change="addedFile($event)" type="file" name="image" accept=".jpg,.jpeg,.png,.bmp">
            <input v-model="addfrom.alt"  type="text" name="alt" placeholder="ALT Название" autocomplete="off" required>
            <input v-model="addfrom.url" type="text" name="url" placeholder="URL" autocomplete="off" required>
            <button><i class="fas fa-plus-square"></i><span>Добавить</span></button>
        </form>
        <draggable :list="sliders" @change="change" class="all-sliders">
            <form v-on:submit.prevent="updateSlider(slider)" v-for="slider in sliders" class="update-slider">
                <div class="img-wrap">
                    <img :src="slider.image" :alt="slider.alt">
                </div>
                <input @change="slider.newImage = $event.target.files[0]" type="file" accept=".jpg,.jpeg,.png,.bmp">
                <div class="input-wrap">
                    <input type="text" v-model="slider.alt" placeholder="ALT Название" required>
                    <div class="name">ALT Название</div>
                </div>
                <div class="input-wrap">
                    <input type="text" v-model="slider.url" placeholder="URL">
                        <div class="name">URL</div>
                </div>
                <div class="btn-wrap">
                    <div class="btn-sub-wrap">
                        <button type="submit"><i class="fas fa-hdd"></i><span>Обновить</span></button>
                    </div>
                    <div class="btn-sub-wrap">
                        <button @click="deleteSlider(slider.id)" type="button"><i class="fas fa-trash"></i><span>Удалить</span></button>
                    </div>
                </div>
            </form>
        </draggable>
    </div>
</template>
<script>
    export default {
        name: 'module-slider',
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
                sliders: [],
                dataform: new FormData(),
                addfrom: {},
            }
        },
        methods: {
            change() {
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/changeSortHomePageSliders', { sliders: this.sliders })
                .then(function() {
                    this.$http.get('/getHomePageSliders')
                    .then(function(response) {
                        this.sliders = response.data;
                    });
                });
            },
            addedFile(event) {
                this.dataform.append('newImage', event.target.files[0]);
            },
            addSlider() {
                this.dataform.append('alt', this.addfrom.alt);
                this.dataform.append('url', this.addfrom.url);
                this.success = false;
                this.error = false;
                this.progress = true;
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/addHomePageSlider', this.dataform, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                })
              .then(function(response) {
                  this.progress = false;
                  if (response.data.success) {
                      this.success = true;
                      this.successMessage = response.data.message;
                      setTimeout(() =>{
                          this.success = false;
                      }, 3000);
                      this.$http.get('/getHomePageSliders')
                      .then(function(response) {
                          this.sliders = response.data;
                      });
                  } else {
                      this.error = true;
                      this.errorMessage = response.data.message;
                      setTimeout(() =>{
                          this.error = false;
                      }, 3000);
                  }
              });
        },
        updateSlider(slider) {
            let updForm = new FormData();
            if (slider.newImage) {
                updForm.append('newImage', slider.newImage);
            }
            updForm.append('id', slider.id);
            updForm.append('alt', slider.alt);
            updForm.append('url', slider.url);
            this.success = false;
            this.error = false;
            this.progress = true;
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http.post('/updateHomePageSlider', updForm, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
              .then(function(response) {
                  this.progress = false;
                  if (response.data.success) {
                      this.success = true;
                      this.successMessage = response.data.message;
                      setTimeout(() =>{
                          this.success = false;
                      }, 3000);
                      this.$http.get('/getHomePageSliders')
                      .then(function(response) {
                          this.sliders = response.data;
                      });
                  } else {
                      this.error = true;
                      this.errorMessage = response.data.message;
                      setTimeout(() =>{
                          this.error = false;
                      }, 3000);
                  }
              });
            },
            deleteSlider(slider_id) {
                this.success = false;
                this.error = false;
                this.progress = true;
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/deleteHomePageSlider', {
                    id: slider_id
                })
                  .then(function(response) {
                      this.progress = false;
                      if (response.data.success) {
                          this.success = true;
                          this.successMessage = response.data.message;
                          setTimeout(() =>{
                              this.success = false;
                          }, 3000);
                          this.$http.get('/getHomePageSliders')
                          .then(function(response) {
                              this.sliders = response.data;
                          });
                      } else {
                          this.error = true;
                          this.errorMessage = response.data.message;
                          setTimeout(() =>{
                              this.error = false;
                          }, 3000);
                      }
                  });
            },
        },
        created: function() {
            this.$http.get('/getHomePageSliders')
            .then(function(response) {
                this.sliders = response.data;
            });
        },
    }
</script>
