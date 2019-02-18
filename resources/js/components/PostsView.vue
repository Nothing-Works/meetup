<template>
    <div class="container">
        <div class="columns">
            <div class="column is-8">
                <post-view
                    v-for="item in items"
                    :key="item.id"
                    :post="item"
                ></post-view>
            </div>

            <div class="column is-4">
                <meta-data :total="total"></meta-data>
            </div>
        </div>
    </div>
</template>

<script>
import PostView from './PostView'
import MetaData from './MetaData'
export default {
    components: {
        PostView,
        MetaData
    },
    props: {
        items: {
            type: Array,
            default() {
                return []
            }
        }
    },
    data() {
        return {
            posts: this.items
        }
    },
    computed: {
        total() {
            return this.posts.length
        }
    }
}
</script>
