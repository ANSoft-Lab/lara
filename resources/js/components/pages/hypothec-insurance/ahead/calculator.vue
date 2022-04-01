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
                            <p class="ahead_achievies_item_content">Со страховой компанией при наступлении страхового случая в течение всего срока страхования.</p>
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
                                    <img src="@/img/hypothec/partners/insurance/ingos_logo.png" alt="Ингосстрах" class="ahead_achievies_carousel_img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/partners/insurance/reso_logo.png" alt="РЕСО" class="ahead_achievies_carousel_img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/partners/insurance/alfa_logo.png" alt="Альфа страхование" class="ahead_achievies_carousel_img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/partners/insurance/vsk_logo.png" alt="ВСК" class="ahead_achievies_carousel_img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/partners/insurance/renes_logo.png" alt="Ренессанс" class="ahead_achievies_carousel_img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/partners/insurance/sber_logo.png" alt="Сберстрахование" class="ahead_achievies_carousel_img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/partners/insurance/pari_logo.png" alt="Пари" class="ahead_achievies_carousel_img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/partners/insurance/yugoria_logo.png" alt="Югория" class="ahead_achievies_carousel_img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/partners/insurance/energogarant_logo.png" alt="Энергогарант" class="ahead_achievies_carousel_img">
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
                                    <img src="@/img/hypothec/partners/banks/sber_logo.png" alt="Сбер" class="ahead_achievies_carousel_img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/partners/banks/vtb_logo.png" alt="ВТБ" class="ahead_achievies_carousel_img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/partners/banks/alfabank_logo.png" alt="Альфа-Банк" class="ahead_achievies_carousel_img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/partners/banks/rosselhoz_logo.jpg" alt="Россельхозбанк" class="ahead_achievies_carousel_img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/partners/banks/rosbank_logo.png" alt="Росбанк" class="ahead_achievies_carousel_img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/partners/banks/psb_logo.jpg" alt="ПСБ" class="ahead_achievies_carousel_img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/partners/banks/otkrytie_logo.png" alt="Открытие" class="ahead_achievies_carousel_img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/partners/banks/raif_logo.png" alt="Райффайзен БАНК" class="ahead_achievies_carousel_img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/partners/banks/uralsib.png" alt="Уралсиб" class="ahead_achievies_carousel_img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/partners/banks/gazprombank_logo.png" alt="ГАЗПРОМБАНК" class="ahead_achievies_carousel_img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/partners/banks/tkb.png" alt="ТКБ" class="ahead_achievies_carousel_img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/partners/banks/mkb_logo.png" alt="МКБ" class="ahead_achievies_carousel_img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="@/img/hypothec/partners/banks/domrfbank_logo.png" alt="Дом РФ" class="ahead_achievies_carousel_img">
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
            slidesPerView: 4,
            speed: 500,
            loop: true,
            spaceBetween: 25,
            autoplay: {
                delay: 3000,
            },
            breakpoints: {
                1300: {
                    slidesPerView: 4,
                    spaceBetween: 25
                },
                969: {
                    slidesPerView: 7,
                    spaceBetween: 10
                },
                479: {
                    slidesPerView: 5,
                    spaceBetween: 7
                },
                0: {
                    slidesPerView: 2,
                    spaceBetween: 7,
                    centeredSlides: true
                }
            }
        })
        const banksCarousel = new Swiper('#banksCarousel .swiper-container', {
            slidesPerView: 4,
            speed: 500,
            loop: true,
            spaceBetween: 25,
            autoplay: {
                delay: 3000,
            },
            breakpoints: {
                1300: {
                    slidesPerView: 4,
                    spaceBetween: 25
                },
                969: {
                    slidesPerView: 7,
                    spaceBetween: 10
                },
                479: {
                    slidesPerView: 5,
                    spaceBetween: 7
                },
                0: {
                    slidesPerView: 2,
                    spaceBetween: 7,
                    centeredSlides: true
                }
            }
        })
    }
}
</script>

<style lang="scss">
    @import '~@/scss/grid-base.scss';
    @import '~@/sass/mixins.scss';
    .calculator {
        margin-top: 160px;
        padding-bottom: 105px;
        position: relative;
        z-index: 2;
        @include m(1299) {
            padding-bottom: 70px;
        }
        @include m(969) {
            margin-top: 0;
        }
        @include m(767) {
            padding-bottom: 0;
        }
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
            @include m(767) {
                background-color: #fff;
            }
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
            @include m(1299) {
                padding: 40px 25px;
            }
            @include m(969) {
                margin: 0 0 100px;
            }
            @include m(767) {
                margin: 0 0 45px;
            }
            @include m(479) {
                padding: 30px 0;
            }
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
                @include m(1299) {
                    min-height: 500px;
                }
            }
        }
        .mt-35 {
            margin-top: 35px;
            @include m(1299) {
                margin-top: 25px;
            }
            @include m(767) {
                margin-top: 5px;
            }
        }
        .mt-mob {
            @include m(767) {
                margin-top: 5px;
            }
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
            @include m(419) {
                margin: 50px auto 0;
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
            @include m(1299) {
                br {
                    display: none;
                }
            }
        }
        &_mainCol {
            max-width: 800px;
            @include m(1299) {
                max-width: 100%;
            }
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
            @include m(767) {
                flex: 1 1 100%;
                max-width: 100%;
                margin-bottom: 20px;
            }
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
                @include m(767) {
                    font-size: 14px;
                    line-height: 1.43;
                }
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
            @include m(1299) {
                position: relative;
                right: auto;
                top: auto;
                bottom: auto;
                left: auto;
                transform: none;
                width: 100%;
                max-width: 969px;
                padding: 25px 15px;
                margin: 0 auto;
                height: 280px;
                border-radius: 140px;
            }
            @include m(767) {
                margin-top: 20px;
                height: 220px;
            }
            @include m(479) {
                height: 184px;
                background: #C4C4C4;
                border-radius: 43px;
                margin: 20px auto 0;
                width: calc(100% - 30px);
            }
        }
        &_carousel {
            &-item {
                margin-top: 40px;
                @include m(1299) {
                    margin-top: 30px;
                }
                @include m(767) {
                    margin-top: 15px;
                }
                @include m(479) {
                    &:first-of-type {
                        margin-top: 0;
                    }
                }
            }
            &_title {
                display: block;
                margin-left: 113px;
                font-size: 16px;
                line-height: 25px;
                letter-spacing: -0.01em;
                color: #221E1F;
                opacity: 0.8;
                @include m(969) {
                    margin-left: 55px;
                }
                @include m(479) {
                    margin-left: auto;
                    margin-right: auto;
                    text-align: center;
                }
            }
            &_img {
                display: block;
                width: 100%;
                height: auto;
            }
        }
    }
</style>
