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
        <div class="ahead_achievies">
            <section>
                <div class="ahead_achievies_mainCol">
                    <h2>Клиенты Finist уже <br />более 8&nbsp;лет получают</h2>
                    <div class="ahead_achievies_items">
                        <div class="ahead_achievies_item">
                            <span class="ahead_achievies_item_title">Ипотечную страховку в самых надежных страховых компаниях</span>
                            <p class="ahead_achievies_item_content">Мы работаем с основными банками ипотечными кредиторами, знаем специфику их работы, требования к оформлению документации</p>
                        </div>
                        <div class="ahead_achievies_item">
                            <span class="ahead_achievies_item_title">Пакетное оформление полиса ипотечного страхования</span>
                            <ul class="ahead_achievies_item_list">
                                <li class="ahead_achievies_item_list-item">Cтрахование имущества</li>
                                <li class="ahead_achievies_item_list-item">Cтрахование жизни/здоровья</li>
                                <li class="ahead_achievies_item_list-item">Cтрахование титула</li>
                            </ul>
                        </div>
                        <div class="ahead_achievies_item">
                            <span class="ahead_achievies_item_title">Предложения от страховых по лучшей цене</span>
                            <p class="ahead_achievies_item_content">Мы заранее можем предупредить наших клиентов о рисках и предложить им выгодные решения</p>
                        </div>
                        <div class="ahead_achievies_item">
                            <span class="ahead_achievies_item_title">Помощь в урегулировании вопросов</span>
                            <p class="ahead_achievies_item_content">со страховой компанией при наступлении страхового случая в течение всего срока страхования.</p>
                        </div>
                    </div>
                </div>
            </section>
            <div class="ahead_achievies_carousels">
                <div class="ahead_achievies_carousel-item">
                    <span class="ahead_achievies_carousel_title">Страховые-партнеры</span>
                    <div class="ahead_achievies_carousel" id="partnersCarousel">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/image-52.png" class="ahead_achievies_carousel_img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/image-52.png" class="ahead_achievies_carousel_img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/image-52.png" class="ahead_achievies_carousel_img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/image-52.png" class="ahead_achievies_carousel_img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/image-52.png" class="ahead_achievies_carousel_img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/image-52.png" class="ahead_achievies_carousel_img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/image-52.png" class="ahead_achievies_carousel_img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/image-52.png" class="ahead_achievies_carousel_img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/image-52.png" class="ahead_achievies_carousel_img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/image-52.png" class="ahead_achievies_carousel_img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ahead_achievies_carousel-item">
                    <span class="ahead_achievies_carousel_title">Банки-партнеры</span>
                    <div class="ahead_achievies_carousel" id="banksCarousel">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/image-52.png" class="ahead_achievies_carousel_img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/image-52.png" class="ahead_achievies_carousel_img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/image-52.png" class="ahead_achievies_carousel_img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/image-52.png" class="ahead_achievies_carousel_img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/image-52.png" class="ahead_achievies_carousel_img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/image-52.png" class="ahead_achievies_carousel_img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/image-52.png" class="ahead_achievies_carousel_img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/image-52.png" class="ahead_achievies_carousel_img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/image-52.png" class="ahead_achievies_carousel_img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/image-52.png" class="ahead_achievies_carousel_img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Swiper from 'swiper';
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
            }, 1000)
        }
    },
    mounted () {
        const partnersCarousel = new Swiper('#partnersCarousel .swiper-container', {
            slidesPerView: 5,
            speed: 500,
            loop: true,
            autoplay: {
                delay: 3000,
            }
        })
        const banksCarousel = new Swiper('#banksCarousel .swiper-container', {
            slidesPerView: 5,
            speed: 500,
            loop: true,
            autoplay: {
                delay: 3000,
            }
        })
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
    .ahead_achievies {
        position: relative;
        z-index: 3;
        h2 {
            display: block;
            font-size: 55px;
            line-height: 98.8%;
            letter-spacing: -0.02em;
            color: #221E1F;
            margin-bottom: 15px;
        }
        &_mainCol {
            max-width: 800px;
        }
        &_items {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -25px;
        }
        &_item {
            display: flex;
            flex-direction: column;
            padding: 0 25px;
            flex: 1 1 50%;
            max-width: 50%;
            margin-bottom: 38px;
            &_title {
                display: block;
                margin-bottom: 8px;
                font-weight: 500;
                font-size: 16px;
                line-height: 1.56;
                letter-spacing: -0.01em;
                color: #221E1F;
            }
            &_content {
                display: block;
                font-size: 15px;
                line-height: 1.67;
                letter-spacing: 0.005em;
                color: #221E1F;
                opacity: 0.7;
            }
            &_list {
                display: block;
                &-item {
                    display: flex;
                    margin-top: 5px;
                    position: relative;
                    font-size: 16px;
                    line-height: 1.56;
                    letter-spacing: 0.005em;
                    color: rgba(#221E1F, 0.7);
                    &::before {
                        content: '';
                        display: block;
                        width: 11px;
                        height: 11px;
                        margin-top: 0.5em;
                        background: rgba(#221E1F, 0.2);
                        border-radius: 50%;
                        margin-right: 17px;
                    }
                }
            }
        }
        &_carousels {
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 39.58vw;
            padding: 40px 0 70px 20px;
            height: 364px;
            border-radius: 182px 0 0 182px;
            background-color: #C4C4C4;
            overflow: hidden;
        }
        &_carousel {
            &-item {
                margin-top: 40px;
            }
            &_title {
                display: block;
                margin-left: 113px;
                font-size: 16px;
                line-height: 25px;
                letter-spacing: -0.01em;
                color: #221E1F;
                opacity: 0.8;
            }
        }
    }
</style>
