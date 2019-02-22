<template>
    <div>
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">{{ item.title }}</p>

                <p class="card-header-icon" @click="favorite">
                    <span class="icon">
                        <i :class="[favorited ? 'fas' : 'far', 'fa-heart']"></i>
                    </span>
                </p>
            </header>

            <div class="card-content">
                <div v-if="!editing" class="content">{{ item.body }}</div>
                <textarea
                    v-else
                    v-model="item.body"
                    class="textarea"
                    type="text"
                ></textarea>
            </div>

            <footer class="card-footer">
                <div class="card-footer-item">
                    <a class="button is-danger" @click="remove">Delete</a>
                </div>

                <div class="card-footer-item level">
                    <div v-if="!editing" class="level-item">
                        <a class="button is-primary" @click="edit">Edit</a>
                    </div>
                    <div v-if="editing" class="level-left">
                        <p class="level-item" @click="save">
                            <a class="button is-success">Save</a>
                        </p>
                    </div>
                    <div v-if="editing" class="level-right">
                        <p class="level-item" @click="cancel">
                            <a class="button is-light">Cancel</a>
                        </p>
                    </div>
                </div>
            </footer>
        </div>
        <hr />
    </div>
</template>

<script>
export default {
    props: {
        post: {
            type: Object,
            default() {
                return {}
            }
        }
    },
    data() {
        return {
            item: { ...this.post },
            editing: false,
            favorited: false
        }
    },

    methods: {
        remove() {
            this.$emit('remove')
        },
        edit() {
            this.editing = true
        },
        cancel() {
            this.item.body = this.post.body
            this.editing = false
        },
        save() {
            this.item.body = this.item.body
            this.editing = false
        },
        favorite() {
            this.favorited = !this.favorited
        }
    }
}
</script>
