<template>
    <div>
        <nav-bar></nav-bar>
        <main class="section">
            <slot></slot>
        </main>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log('mounted')
    }
}
</script>
