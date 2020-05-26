<template>
    <div class="container">
        <div class="row justify-content-center mp-3" ref='imageUpload'>
            <div class="col-12 bg-dark text-white rounded py-5 my-3 text-center">
               <h2>Drop Your Image(s) Here</h2> 
            </div>
        </div>
    </div>
</template>

<script>
    import Dropzone from 'dropzone';
    export default {
        data() {
            return {
                dropzone : null,
            }
        },
        mounted() {
            this.dropzone = new Dropzone(this.$refs.imageUpload, {
                url : '/api/images',
            });
        }
    }
</script>
