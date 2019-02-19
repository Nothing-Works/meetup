<template>
    <nav class="navbar has-shadow">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item"></a>
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
                </div>
                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button is-primary" href>
                                <strong>Sign up</strong>
                            </a>
                            <a class="button is-light" href>Log in</a>
                        </div>
                    </div>

                    <div
                        class="navbar-item has-dropdown"
                        :class="{ 'is-active': showDropDown }"
                        @click="toggleDropDown"
                    >
                        <a class="navbar-link"></a>
                        <div class="navbar-dropdown">
                            <a
                                class="navbar-item"
                                href
                                onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();"
                                >Log out</a
                            >
                            <form
                                id="logout-form"
                                action
                                method="POST"
                                style="display: none;"
                            ></form>
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
    mounted() {
        console.log('Component mounted.')
    },
    methods: {
        toggleBurger() {
            this.showBurger = !this.showBurger
        },
        toggleDropDown() {
            this.showDropDown = !this.showDropDown
        }
    }
}
</script>
