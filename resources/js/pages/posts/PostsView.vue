<template>
    <layout>
        <div class="container">
            <div class="field is-grouped">
                <div class="control">
                    <a href="posts/create" class="button is-primary">New</a>
                </div>
                <p class="control">
                    <input
                        v-model="input"
                        v-focus
                        class="input"
                        type="text"
                        placeholder="Find a post"
                        @keyup="search"
                    />
                </p>
            </div>

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
            posts: this.items,
            input: ''
        }
    },
    computed: {
        total() {
            return this.posts.length
        }
    },
    mounted() {
        let urlParams = new URLSearchParams(window.location.search)
        let myParam = urlParams.get('search')
        this.input = myParam
    },
    methods: {
        remove(index) {
            this.posts.splice(index, 1)
        },
        search() {
            if (this.input == '' || this.input == null) {
                Turbolinks.visit('/posts')
            } else {
                Turbolinks.visit('/posts?search=' + this.input)
            }
        }
    }
}
</script>
