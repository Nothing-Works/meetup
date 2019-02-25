<template>
    <layout>
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-half">
                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">Create Posts</p>
                        </header>

                        <div class="card-content">
                            <form @submit.prevent="submit">
                                <div class="field">
                                    <label for="title" class="label"
                                        >Title</label
                                    >

                                    <div class="control">
                                        <input
                                            v-model="form.title"
                                            type="text"
                                            class="input"
                                        />
                                        <p
                                            v-if="errors.has('title')"
                                            class="help is-danger"
                                        >
                                            {{ errors.first('title') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <textarea
                                            v-model="form.body"
                                            class="textarea"
                                            placeholder="What's in your mind?"
                                        ></textarea>
                                        <p
                                            v-if="errors.has('body')"
                                            class="help is-danger"
                                        >
                                            {{ errors.first('body') }}
                                        </p>
                                    </div>
                                </div>

                                <div class="field is-grouped">
                                    <div class="control">
                                        <button
                                            type="submit"
                                            class="button is-primary"
                                        >
                                            Create
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
                title: '',
                body: ''
            },
            errors: new Errors()
        }
    },
    methods: {
        submit() {
            axios
                .post('/posts', this.form)
                .then(() => Turbolinks.visit('/posts'))
                .catch(error => {
                    this.errors = new Errors(error.response.data.errors)
                })
        }
    }
}
</script>
