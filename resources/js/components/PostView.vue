<template>
    <div>
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">{{ item.title }}</p>
            </header>
            <div class="card-content">
                <div class="content">{{ item.body }}</div>
            </div>
            <footer class="card-footer">
                <a class="card-footer-item button is-danger" @click="remove"
                    >Delete</a
                >
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
            item: this.post
        }
    },
    methods: {
        remove() {
            this.$emit('remove')
        }
    }
}
</script>
