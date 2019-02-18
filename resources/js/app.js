import Vue from 'vue'
require('./bootstrap')

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('posts-view', require('./components/PostsView.vue').default)

const root = document.getElementById('app')

window.Vue = new Vue({
    render: h =>
        h(Vue.component(root.dataset.component), {
            props: JSON.parse(root.dataset.props)
        })
}).$mount(root)
