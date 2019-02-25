<template>
    <div :class="classes" @mouseover="mouseIn" @mouseleave="mouseOut">
        <div class="plan-header">{{ plan.title }}</div>
        <div class="plan-price">
            <span class="plan-price-amount">
                <span class="plan-price-currency">$</span>
                {{ plan.cost }} </span
            >/month
        </div>
        <div class="plan-items">
            <div class="plan-item">{{ plan.storage }} GB Storage</div>
            <div class="plan-item">{{ plan.domains }} Domains</div>
            <div class="plan-item">{{ plan.bandWidth }} Bandwidth</div>
            <div class="plan-item">{{ plan.emails }} Email Boxes</div>
        </div>
        <div class="plan-footer">
            <a :href="`/plans/${plan.id}`" class="button is-fullwidth"
                >More details</a
            >
        </div>
    </div>
</template>

<script>
export default {
    props: {
        item: {
            type: Object,
            default() {
                return {}
            }
        },
        colors: {
            type: Array,
            default() {
                return []
            }
        }
    },
    data() {
        return {
            plan: { ...this.item },
            active: false
        }
    },
    computed: {
        classes() {
            return {
                'pricing-plan': true,
                [this.colors[this.plan.id - 1]]: true,
                'is-active': this.active
            }
        }
    },
    methods: {
        mouseIn() {
            this.active = true
        },
        mouseOut() {
            this.active = false
        }
    }
}
</script>
