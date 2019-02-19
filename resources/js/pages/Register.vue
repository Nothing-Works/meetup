<template>
    <layout>
        <div class="container">
            <div class="columns is-mobile is-centered">
                <div class="column is-half">
                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">Register</p>
                        </header>

                        <div class="card-content">
                            <form method="POST" @submit.prevent="submit">
                                <div class="field">
                                    <label for="name" class="label">Name</label>

                                    <div class="control">
                                        <input
                                            v-model="name"
                                            type="text"
                                            class="input"
                                        />
                                    </div>
                                </div>

                                <div class="field">
                                    <label for="email" class="label"
                                        >E-Mail Address</label
                                    >

                                    <div class="control">
                                        <input
                                            v-model="email"
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
                                            v-model="password"
                                            type="password"
                                            class="input"
                                        />
                                    </div>
                                </div>

                                <div class="field">
                                    <label for="password-confirm" class="label"
                                        >Confirm Password</label
                                    >

                                    <div class="control">
                                        <input
                                            v-model="password_confirmation"
                                            type="password"
                                            class="input"
                                        />
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="control">
                                        <button
                                            type="submit"
                                            class="button is-primary"
                                        >
                                            Register
                                        </button>
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
            name: '',
            email: '',
            password: '',
            password_confirmation: ''
        }
    },
    methods: {
        submit() {
            const data = {
                name: this.name,
                email: this.email,
                password: this.password,
                password_confirmation: this.password_confirmation
            }

            axios.post('/register', data)
        }
    }
}
</script>
