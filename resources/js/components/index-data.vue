<template>
    <div class="main-wrap">
        <form enctype="multipart/form-data">
            <input type="file" name="file-upload" v-on:change="fileChange($event.target.files)">
            <button type="button" v-on:click="onSubmit()">now</button>
        </form>
    </div>
</template>

<script>
    export default {
        name: 'index-data',
        data() {
            return {
                progress: false,
                files: new FormData(),
            }
        },
        computed: {
        },
        methods: {
            fileChange(fileList) {
                for (var pair of this.files.entries()) {
                    console.log(pair[0]+ ', ' + JSON.stringify(pair[1]));
                }
                this.files.append("file", fileList[0], fileList[0].name);
                for (var pair of this.files.entries()) {
                    console.log(pair[0]+ ', ' + JSON.stringify(pair[1]));
                }
            },
            onSubmit() {
                console.log(this.files);
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/uploadProducts', { file: this.files })
                .then(function(response) {
                    console.log(response.data.success);
                    console.log(response.data.file);
                });
            },
        },
        created() {

        }
    }
</script>
