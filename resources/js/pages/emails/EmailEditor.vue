<template>
    <layout>
        <div class="wrapper">
            <div id="editor"></div>
        </div>

        <div class="select">
            <select v-model="selectedId">
                <option v-for="id in ids" :key="id" :value="id">{{
                    id
                }}</option>
            </select>
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
            json: '',
            ids: [],
            selectedId: ''
        }
    },
    mounted() {
        axios.get('/emails/all').then(({ data }) => (this.ids = data))
        unlayer.init({
            id: 'editor',
            displayMode: 'email'
        })
    },
    methods: {
        save() {
            unlayer.exportHtml(function({ design, html }) {
                axios
                    .post('/emails', {
                        json: JSON.stringify(design),
                        html: html
                    })
                    .catch(error => {
                        console.log(error)
                    })
            })
        },
        load() {
            axios.get('/emails/' + this.selectedId).then(({ data }) => {
                this.json = data.json
                unlayer.loadDesign(JSON.parse(this.json))
            })
        },
        send() {
            axios
                .post('/send')
                .then(data => {
                    console.log(data)
                })
                .catch(error => {
                    console.log(error)
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
