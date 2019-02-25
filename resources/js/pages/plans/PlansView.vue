<template>
    <layout>
        <div class="container">
            <div class="pricing-table">
                <pricing-plan
                    v-for="plan in plans"
                    :key="plan.id"
                    :item="plan"
                    :colors="colors"
                ></pricing-plan>
            </div>
        </div>
    </layout>
</template>

<script>
export default {
    props: {
        items: {
            type: Array,
            default() {
                return []
            }
        }
    },
    data() {
        return {
            plans: this.items,
            colors: ['is-warning', 'is-danger', 'is-primary', 'is-success']
        }
    }
}
</script>
