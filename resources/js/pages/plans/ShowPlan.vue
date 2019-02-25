<template>
    <layout>
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-half">
                    <nav class="panel">
                        <p class="panel-heading">Plan details</p>

                        <a class="panel-block">
                            <span class="panel-icon">
                                <i class="fas fa-cloud"></i>
                            </span>
                            {{ plan.title }}
                        </a>
                        <a class="panel-block">
                            <span class="panel-icon">
                                <i class="fas fa-cloud"></i>
                            </span>
                            <span class="plan-price-currency">$</span>
                            {{ plan.cost }} /month
                        </a>
                        <a class="panel-block">
                            <span class="panel-icon">
                                <i class="fas fa-cloud"></i>
                            </span>
                            {{ plan.storage }} GB Storage
                        </a>
                        <a class="panel-block">
                            <span class="panel-icon">
                                <i class="fas fa-cloud"></i>
                            </span>
                            {{ plan.domains }} Domains
                        </a>
                        <a class="panel-block">
                            <span class="panel-icon">
                                <i class="fas fa-cloud"></i>
                            </span>
                            {{ plan.bandWidth }} Bandwidth
                        </a>
                        <a class="panel-block">
                            <span class="panel-icon">
                                <i class="fas fa-cloud"></i>
                            </span>
                            {{ plan.emails }} Email Boxes
                        </a>
                    </nav>
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
