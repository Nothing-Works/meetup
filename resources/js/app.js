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

document.addEventListener('turbolinks:load', event => {
    const root = document.getElementById('app')

    if (window.Vue) {
        window.Vue.$destroy(true)
    }

    window.Vue = new Vue({
        render: h =>
            h(Vue.component(root.dataset.component), {
                props: JSON.parse(root.dataset.props)
            })
    }).$mount(root)
})
