<template>
    <div class="ahead">
        <section>
            <h2>Страхование ипотеки</h2>
            <ul>
                <li>Комплексная помощь по оформлению полиса</li>
                <li>7 индивидуальных предложений от страховых для клиента</li>
                <li>Даем дополнительные скидки до 30%</li>
            </ul>
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
    .ahead {
        padding: 125px 0 0;
        background: #C4C4C4 url('~@/img/hypothec/ahead.jpg') no-repeat top center;
        ::v-deep h2 {
            display: block;
            font-size: 55px;
            line-height: 98.8%;
            letter-spacing: -0.02em;
            color: #221E1F;
            margin-bottom: 15px;
        }
        ul {
            display: block;
            li {
                display: flex;
                margin-top: 15px;
                position: relative;
                font-size: 16px;
                line-height: 1.56;
                letter-spacing: 0.005em;
                color: #000000;
                &::before {
                    content: '';
                    display: block;
                    width: 11px;
                    height: 11px;
                    margin-top: 0.5em;
                    background: #F2CB4D;
                    border-radius: 50%;
                    margin-right: 17px;
                }
            }
        }
    }
</style>
