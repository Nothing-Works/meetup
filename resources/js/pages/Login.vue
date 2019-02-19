<template>
    <layout>
        <div class="container">
            <div class="columns is-mobile is-centered">
                <div class="column is-half">
                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">Log in</p>
                        </header>

                        <div class="card-content">
                            <form method="POST">
                                <div class="field">
                                    <label for="email" class="label"
                                        >E-Mail Address</label
                                    >
                                    <div class="control">
                                        <input
                                            type="email"
                                            class="input"
                                            name="email"
                                        />
                                    </div>
                                </div>

                                <div class="field">
                                    <label for="password" class="label"
                                        >Password</label
                                    >
                                    <div class="control">
                                        <input
                                            type="password"
                                            class="input"
                                            name="password"
                                        />
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="control">
                                        <label for="remember" class="checkbox">
                                            <input
                                                id="remember"
                                                type="checkbox"
                                                name="remember"
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
export default {}
</script>
