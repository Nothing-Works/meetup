<template>
    <layout>
        <div class="container">
            <div class="columns">
                <div class="column is-8">
                    <post-view
                        v-for="(item, index) in items"
                        :key="item.id"
                        :post="item"
                        @remove="remove(index)"
                    ></post-view>
                </div>

                <div class="column is-4">
                    <meta-data :total="total"></meta-data>
                </div>
            </div>
        </div>
    </layout>
</template>

<script>
export default {
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
    },
    methods: {
        remove(index) {
            this.posts.splice(index, 1)
        }
    }
}
</script>
