<template>
    <layout>
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-half">
                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">Register</p>
                        </header>

                        <div class="card-content">
                            <form @submit.prevent="submit">
                                <div class="field">
                                    <label for="name" class="label">Name</label>

                                    <div class="control">
                                        <input
                                            v-model="form.name"
                                            name="name"
                                            type="text"
                                            class="input"
                                        />
                                        <p
                                            v-if="errors.has('name')"
                                            class="help is-danger"
                                        >
                                            {{ errors.first('name') }}
                                        </p>
                                    </div>
                                </div>

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
                                        <p
                                            v-if="errors.has('email')"
                                            class="help is-danger"
                                        >
                                            {{ errors.first('email') }}
                                        </p>
                                    </div>
                                </div>

                                <div class="field">
                                    <label for="password" class="label"
                                        >Password</label
                                    >

                                    <div class="control">
                                        <input
                                            v-model="form.password"
                                            name="password"
                                            type="password"
                                            class="input"
                                        />
                                        <p
                                            v-if="errors.has('password')"
                                            class="help is-danger"
                                        >
                                            {{ errors.first('password') }}
                                        </p>
                                    </div>
                                </div>

                                <div class="field">
                                    <label for="password-confirm" class="label"
                                        >Confirm Password</label
                                    >

                                    <div class="control">
                                        <input
                                            v-model="form.password_confirmation"
                                            type="password"
                                            name="password_confirmation"
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
import { Errors } from 'form-backend-validation'

export default {
    data() {
        return {
            form: {
                name: '',
                email: '',
                password: '',
                password_confirmation: ''
            },
            errors: new Errors()
        }
    },
    methods: {
        submit() {
            axios
                .post('/register', this.form)
                .then(() => {
                    Turbolinks.visit('/home')
                })
                .catch(error => {
                    this.errors = new Errors(error.response.data.errors)
                })
        }
    }
}
</script>
