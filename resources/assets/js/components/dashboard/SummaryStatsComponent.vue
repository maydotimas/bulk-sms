<template>
    <div class="masonry-item col-md-6">
        <div class="bd bgc-white">
            <div class="layers">
                <div class="layer w-100 pX-20 pT-20">
                    <h6 class="lh-1">Monthly Stats</h6>
                </div>
                <div class="layer w-100 p-20">
                    <canvas id="line-chart" height="220">
                    </canvas>
                </div>
                <div class="layer bdT p-20 w-100">
                    <div class="peers ai-c jc-c gapX-20">
                        <div class="peer">
<span class="fsz-def fw-600 mR-10 c-grey-800">10% <i
        class="fa fa-level-up c-green-500">
</i>
</span>
                            <small class="c-grey-500 fw-600">APPL</small>
                        </div>
                        <div class="peer fw-600">
<span class="fsz-def fw-600 mR-10 c-grey-800">2% <i
        class="fa fa-level-down c-red-500">
</i>
</span>
                            <small class="c-grey-500 fw-600">Average</small>
                        </div>
                        <div class="peer fw-600">
<span class="fsz-def fw-600 mR-10 c-grey-800">15% <i
        class="fa fa-level-up c-green-500">
</i>
</span>
                            <small class="c-grey-500 fw-600">Sales</small>
                        </div>
                        <div class="peer fw-600">
<span class="fsz-def fw-600 mR-10 c-grey-800">8% <i
        class="fa fa-level-down c-red-500">
</i>
</span>
                            <small class="c-grey-500 fw-600">Profit</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "SummaryStatsComponent"
    }
</script>

<style scoped>

</style>