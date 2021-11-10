<template>
    <div></div>
</template>

<script>
    export default {
        mounted() {
            this.listen();
        },
        props: [
            'id'
        ],
        methods: {
            listen: function() {
                
                Echo.channel('queue-notifier').listen('RunJobDone', (res) => {
                    noty({
                        type: 'success',
                        layout: 'bottomRight',
                        text: res.message,
                        timeout: false
                    })
                })
                
                Echo.private('App.Models.User.' + this.id).listen('RunPrivateJobDone', (res) => {
                    noty({
                        type: 'success',
                        layout: 'bottomRight',
                        text: res.message,
                        timeout: false
                    })
                })
                
            }
        }
    }
</script>
