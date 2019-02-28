<template>
    <layout>
        <div class="wrapper">
            <div id="editor"></div>
        </div>
    </layout>
</template>

<script>
export default {
    mounted() {
        unlayer.init({
            id: 'editor',
            projectId: 2215,
            templateId: '6011'
        })
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
