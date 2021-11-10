<template>
    <div>
        <div class="spinner-border text-secondary float-left mr-2" role="status" v-if="loading">
            <span class="sr-only">Loading...</span>
        </div>
        <button class="btn btn-success float-left mr-2" v-if="!loading" @click="sendJob">{{ title }}</button>
    </div>
</template>

<script>
    export default {
        props: [
            'link',
            'title'
        ],
        mounted() {
        },
        data: function() {
            return {
                loading: false
            }
        },
        methods: {
            sendJob: function() {
                this.loading = true
                
                noty({
                    type: 'information',
                    layout: 'bottomRight',
                    text: 'Please wait, your request is processing...',
                    timeout: 3000
                });
                
                axios.get(this.link).then((res) => {
                    this.loading = false
                })
            }
        }
    }
</script>
