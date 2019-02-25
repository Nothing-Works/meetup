<template>
    <layout>
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-half">
                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">{{ plan.title }}</p>
                        </header>
                        <div class="card-content">
                            <div class="content">{{ plan.cost }}</div>
                        </div>
                    </div>
                    <div class="field has-margin-top-15">
                        <div class="control">
                            <a class="button is-link" href="/plans">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </layout>
</template>

<script>
export default {
    props: {
        plan: {
            type: Object,
            default() {
                return {}
            }
        }
    }
}
</script>
