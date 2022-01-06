<template>
    <div class="ahead">
        <section>
            <h2>Страхование ипотеки</h2>
            <ul>
                <li>Комплексная помощь по оформлению полиса</li>
                <li>7 индивидуальных предложений от страховых для клиента</li>
                <li>Даем дополнительные скидки до 30%</li>
            </ul>
            <img src="@/img/hypothec/bg.png" alt="" class="ahead_bg">
        </section>
        <ahead-calculator />
        <hypothec-advantages />
        <hypothec-f-a-q />
    </div>
</template>

<script>
import AheadCalculator from "./calculator";
import HypothecAdvantages from "./advantages/index";
import HypothecFAQ from "./faq/index";
export default {
    name: "hypothecInsuranceAhead",
    components: {
        HypothecFAQ,
        HypothecAdvantages,
        AheadCalculator
    }
}
</script>

<style lang="scss" scoped>
    @import '~@/sass/mixins.scss';
    .ahead {
        padding: 125px 0 0;
        background: #C4C4C4 url('~@/img/hypothec/ahead.jpg') no-repeat top center;
        @include m(969) {
            background: #F0F1F3;
        }
        @include m(767) {
            padding-top: 40px;
            background: #fff;
        }
        ::v-deep h2 {
            display: block;
            font-size: 55px;
            line-height: 98.8%;
            letter-spacing: -0.02em;
            color: #221E1F;
            margin-bottom: 15px;
            @include m(1299) {
                font-size: 46px;
            }
            @include m(969) {
                font-size: 42px;
            }
            @include m(767) {
                font-size: 28px;
            }
        }
        &_bg {
            display: none;
            @include m(969) {
                display: block;
                width: 100%;
                height: auto;
            }
        }
        ul {
            display: block;
            @include m(767) {
                margin-top: 6px;
            }
            li {
                display: flex;
                margin-top: 15px;
                position: relative;
                font-size: 16px;
                line-height: 1.56;
                letter-spacing: 0.005em;
                color: #000000;
                @include m(969) {
                    margin-top: 10px;
                }
                @include m(767) {
                    font-size: 14px;
                    line-height: 1.4;
                    margin-top: 14px;
                }
                &::before {
                    content: '';
                    display: block;
                    width: 11px;
                    height: 11px;
                    min-width: 11px;
                    margin-top: 0.5em;
                    background: #F2CB4D;
                    border-radius: 50%;
                    margin-right: 17px;
                }
            }
        }
    }
</style>
