require('./bootstrap')
import Vue from 'vue'
import Shared from './mixins/shared'

Vue.mixin(Shared)

const files = require.context('./', true, /\.vue$/i)
files.keys().map(key =>
    Vue.component(
        key
            .split('/')
            .pop()
            .split('.')[0],
        files(key).default
    )
)

document.addEventListener('turbolinks:load', () => {
    const root = document.getElementById('app')

    if (window.vue) {
        window.vue.$destroy(true)
    }

    window.vue = new Vue({
        render: h =>
            h(Vue.component(root.dataset.component), {
                props: JSON.parse(root.dataset.props)
            })
    }).$mount(root)
})
