<template>
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Total Posts : {{ total }}</p>
        </header>

        <div class="card-content">
            <div class="content">
                Something to show
                <hr />

                <div class="field has-addons">
                    <div class="control">
                        <input
                            v-model="email"
                            class="input"
                            type="text"
                            placeholder="Your Email"
                        />
                    </div>

                    <div class="control">
                        <a class="button is-info" @click="subscribe"
                            >Subscribe</a
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        total: {
            type: Number,

            default: 0
        }
    },

    data() {
        return {
            email: ''
        }
    },

    methods: {
        subscribe() {
            // axios.post('/endpoint',data)

            alert('your email is : ' + this.email)

            this.email = ''
        }
    }
}
</script>
