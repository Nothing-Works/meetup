<template>
    <div>
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">{{ item.title }}</p>
            </header>
            <div class="card-content">
                <div class="content">{{ item.body }}</div>
            </div>
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
    }
}
</script>
