<template>
    <div class="calculator">
        <section class="calculator_form">
            <div class="container calculator_form_body">
                <calculator-main-view
                    v-if="!loading && !response"
                    @onSuccess="loadData"
                />
                <calculator-loading-view
                    v-if="loading && !response"
                />
                <calculator-result v-if="!loading && response" :response="response" />
            </div>
        </section>
    </div>
</template>

<script>

import CalculatorMainView from "./calculator/mainView";
import CalculatorLoadingView from "./calculator/loadingView";
import CalculatorResult from "./calculator/result";
export default {
    name: "aheadCalculator",
    components: {
        CalculatorResult,
        CalculatorMainView,
        CalculatorLoadingView
    },
    data: () => ({
        loading: false,
        response: null
    }),
    methods: {
        loadData (requestBody) {
            const vm = this
            vm.loading = true
            setTimeout(() => {
                vm.loading = false
                vm.response = { data: '' }
            }, 2000)
        }
    }
}
</script>

<style lang="scss">
    @import '~@/scss/grid-base.scss';
    .calculator {
        margin-top: 160px;
        padding-bottom: 105px;
        position: relative;
        z-index: 2;
        &::before {
            content: '';
            display: block;
            position: absolute;
            z-index: 1;
            top: 140px;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #E5E5E5;
        }
        &_form {
            position: relative;
            background-color: #fff;
            box-shadow: 0px 0px 100px rgba(0, 0, 0, 0.07);
            border-radius: 10px;
            padding: 60px 65px;
            margin-bottom: 120px;
            z-index: 2;
            display: flex;
            &_title {
                display: block;
                font-size: 55px;
                line-height: 98.8%;
                letter-spacing: -0.02em;
                color: #221E1F;
                margin-bottom: 15px;
            }
            &_body {
                min-height: 578px;
            }
        }
        .mt-35 {
            margin-top: 35px;
        }
        &_submit-btn {
            outline: none;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 35px;
            height: 70px;
            width: 230px;
            background: #F2CB4D;
            cursor: pointer;
            font-size: 16px;
            letter-spacing: 0.005em;
            color: #221E1F;
            border: none;
            margin: 50px 15px 0 auto;
            transition: linear 0.2s;
            font-weight: 500;
            &:hover {
                background: darken(#F2CB4D, 10%);
            }
        }
    }
</style>
