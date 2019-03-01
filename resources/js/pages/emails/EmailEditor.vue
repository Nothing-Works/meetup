<template>
    <layout>
        <div class="wrapper">
            <div id="editor"></div>
        </div>
        <a class="button is-primary has-margin-top-10" @click="save">save</a>
        <a class="button is-primary has-margin-top-10" @click="load">load</a>
        <a class="button is-primary has-margin-top-10" @click="send">send</a>
    </layout>
</template>

<script>
export default {
    data() {
        return {
            email: ''
        }
    },
    mounted() {
        axios.get('/emails/3').then(({ data }) => (this.email = data.email))

        unlayer.init({
            id: 'editor',
            displayMode: 'email'
        })
    },
    methods: {
        save() {
            unlayer.saveDesign(function(email) {
                axios
                    .post('/emails', { email: JSON.stringify(email) })
                    .catch(error => {
                        console.log(error)
                    })
            })
        },
        load() {
            unlayer.loadDesign(JSON.parse(this.email))
        },
        send() {
            unlayer.exportHtml(function(data) {
                const email = data.html
                axios.post('/send', { email }).catch(error => {
                    console.log(error)
                })
            })
        }
    }
}
</script>

<style scoped>
.wrapper {
    flex: 1;
    display: flex;
}
#editor {
    flex: 1;
    display: flex;
    min-height: 700px !important;
    min-width: 1024px !important;
}

#editor > iframe {
    flex: 1;
    width: 100%;
    height: 100%;
    display: flex;
    min-height: 700px !important;
    min-width: 1024px !important;
    border: 0px;
}
</style>
