<template>
    <nav class="navbar has-shadow">
        <div class="container">
            <div class="navbar-brand">
                <a href="/" class="navbar-item">Meetup</a>
                <a
                    class="navbar-burger burger"
                    :class="{ 'is-active': showBurger }"
                    @click="toggleBurger"
                >
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
            <div class="navbar-menu" :class="{ 'is-active': showBurger }">
                <div class="navbar-start">
                    <a href="/posts" class="navbar-item">Posts</a>
                    <a href="/plans" class="navbar-item">Plans</a>
                </div>
                <div class="navbar-end">
                    <div v-if="!shared" class="navbar-item">
                        <div class="buttons">
                            <a class="button is-primary" href="/register">
                                <strong>Sign up</strong>
                            </a>
                            <a class="button is-light" href="/login">Log in</a>
                        </div>
                    </div>

                    <div
                        v-else
                        class="navbar-item has-dropdown"
                        :class="{ 'is-active': showDropDown }"
                        @click="toggleDropDown"
                    >
                        <a class="navbar-link">{{ shared.auth.user.name }}</a>
                        <div class="navbar-dropdown">
                            <a class="navbar-item" @click="logout">Log out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    data() {
        return {
            showBurger: false,
            showDropDown: false
        }
    },
    methods: {
        toggleBurger() {
            this.showBurger = !this.showBurger
        },
        toggleDropDown() {
            this.showDropDown = !this.showDropDown
        },
        logout() {
            axios.post('/logout').then(() => {
                Turbolinks.visit('/')
            })
        }
    }
}
</script>
