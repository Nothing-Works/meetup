<template>
    <layout>
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-half">
                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">Log in</p>
                        </header>

                        <div class="card-content">
                            <form @submit.prevent="submit">
                                <div class="field">
                                    <label for="email" class="label"
                                        >E-Mail Address</label
                                    >

                                    <div class="control">
                                        <input
                                            v-model="form.email"
                                            name="email"
                                            type="email"
                                            class="input"
                                        />
                                    </div>
                                </div>

                                <div class="field">
                                    <label for="password" class="label"
                                        >Password</label
                                    >

                                    <div class="control">
                                        <input
                                            v-model="form.password"
                                            type="password"
                                            name="password"
                                            class="input"
                                        />
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="control">
                                        <label for="remember" class="checkbox">
                                            <input
                                                v-model="form.remember"
                                                type="checkbox"
                                            />
                                            Remember Me
                                        </label>
                                    </div>
                                </div>

                                <div class="field is-grouped">
                                    <div class="control">
                                        <button
                                            type="submit"
                                            class="button is-primary"
                                        >
                                            Login
                                        </button>
                                    </div>

                                    <div class="control">
                                        <a class="button is-text"
                                            >Forgot Your Password?</a
                                        >
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </layout>
</template>

<script>
export default {
    data() {
        return {
            form: {
                email: '',

                password: '',

                remember: ''
            }
        }
    },

    methods: {
        submit() {
            axios

                .post('/login', this.form)

                .then(() => (window.location.href = '/home'))
        }
    }
}
</script>
