<template>
    <div class="faq">
        <div class="faq_wrapper">
            <h2>Часто задаваемые вопросы</h2>
            <ul class="faq_block">
                <li class="faq_item" v-for="(item, i) in items" :key="i">
                    <div class="faq_item_title" @click="toggleItem(i)">
                        <svg
                            class="faq_item_title_icon"
                            :class="{
                                'faq_item_title_icon--active': itemIsOpened(i)
                            }"
                            width="19"
                            height="18"
                            viewBox="0 0 19 18"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path d="M8.42442 8.185V0.309999H10.3144V8.185H18.1894V10.075H10.3144V17.95H8.42442V10.075H0.549414V8.185H8.42442Z" fill="black"/>
                        </svg>
                        <span
                            class="faq_item_title_content"
                            :class="{
                                'faq_item_title_content--active': itemIsOpened(i)
                            }"
                        >
                            {{ item.title }}
                        </span>
                    </div>
                    <p class="faq_item_content" v-if="itemIsOpened(i)">{{ item.content }}</p>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    name: "hypothecFAQ",
    data: () => ({
        openedItems: [],
        items: [
            {
                title: 'Где можно узнать перечень аккредитованных страховых компаний?',
                content: 'Перечень страховых компаний, которые соответствуют требованиям банка-кредитора, можно узнать на сайте банка или уточнить по телефону в самом отделении банка.'
            },
            {
                title: 'Каков перечень необходимых документов для заключения договора страхования?',
                content: 'Перечень необходимых документов зависит от требований страховой компании и рисков, принимаемых на страхование. Наш специалист высылает весь список необходимых документов вместе с расчетом стоимости полиса страхования.'
            },
            {
                title: 'В каких случаях требуется прохождение медицинского обследования при страховании жизни и здоровья заемщика?',
                content: 'Необходимость проведения медицинского обследования устанавливается по каждому клиенту индивидуально, и зависит от размера страховой суммы и возраста заемщика, а также от информации о состоянии здоровья, указанной в заявлении-анкете. Лица, достигшие 65 лет и выше, на момент заключения договора страхования, не могут заключить договор страхования, вне зависимости от вышеперечисленных факторов.'
            },
            {
                title: 'Какой срок действия договора ипотечного страхования?',
                content: 'Договор ипотечного страхования заключается на один год либо на весь срок действия кредитного договора с ежегодной пролонгацией. Срок действия полиса определяется требованиями кредитора. Срок действия договора страхования ипотеки для клиентов ПАО «Сбербанк» составляет 12 месяцев.'
            },
            {
                title: 'Как уплачивается страховая премия?',
                content: 'При заключении договора страхования сроком на 1 год страховой взнос уплачивается единовременно или в рассрочку (по согласованию с банком). Если договор заключается на срок более одного года, то страховой взнос уплачивается ежегодно в течение срока действия договора страхования.'
            },
            {
                title: 'При наступлении страхового случая кто получит страховое возмещение?',
                content: 'Банк в размере непогашенной части задолженности по кредитному договору. Собственники застрахованного имущества или их наследники – в оставшейся части страховой выплаты. Поэтому мы рекомендуем дополнительно застраховать ваше имущество на случай утраты или повреждения, в т.ч. внутреннюю отделку квартиры или дома, движимое имущество. Также можно обезопасить себя на случай причинения вреда соседям и заключить договор страхования гражданской ответственности.'
            }
        ]
    }),
    computed: {
        itemIsOpened () {
            return index => {
                return this.openedItems.find(item => item === index) !== undefined
            }
        }
    },
    methods: {
        toggleItem (index) {
            const foundedIndex = this.openedItems.findIndex(item => item === index)
            if (foundedIndex < 0) {
                this.openedItems.push(index)
            } else {
                this.openedItems.splice(foundedIndex, 1)
            }
        }
    }
}
</script>

<style lang="scss" scoped>
    @import '~@/sass/mixins.scss';
    .faq {
        background: #F2F3F4;
        padding: 110px 0 170px;
        @include m(1299) {
            padding: 80px 0 70px;
        }
        @include m(767) {
            padding: 40px 15px 30px;
            h2 {
                text-align: center;
            }
        }
        &_wrapper {
            max-width: 870px;
            margin: 0 auto;
        }
        &_block {
            margin-top: 15px;
            &::before {
                content: '';
                clear: both;
                display: table;
            }
        }
        &_item {
            margin-top: 22px;
            @include m(767) {
                margin-top: 15px;
            }
            &_title {
                display: flex;
                user-select: none;
                cursor: pointer;
                &_icon {
                    margin-right: 32px;
                    margin-top: 0.25em;
                    transition: linear 0.3s;
                    opacity: 0.2;
                    @include m(969) {
                        margin-right: 20px;
                    }
                    @include m(767) {
                        flex: 1 1 18px;
                        max-width: 18px;
                        min-width: 18px;
                        margin-right: 14px;
                    }
                    &--active {
                        opacity: 1;
                        transform: rotate(45deg);
                    }
                }
                &_content {
                    display: block;
                    font-size: 22px;
                    line-height: 27px;
                    letter-spacing: -0.01em;
                    color: #221E1F;
                    transition: linear 0.3s;
                    padding: 0 7px;
                    @include m(969) {
                        font-size: 18px;
                        line-height: 1.3;
                    }
                    @include m(767) {
                        font-size: 15px;
                        line-height: 1.33;
                    }
                    &--active {
                        background: #F2CB4D;
                    }
                }
            }
            &_content {
                display: block;
                font-size: 16px;
                line-height: 22px;
                letter-spacing: -0.01em;
                color: #221E1F;
                padding-left: 55px;
                margin-top: 11px;
                @include m(969) {
                    line-height: 1.4;
                }
                @include m(767) {
                    font-size: 14px;
                    padding-left: 35px;
                }
            }
        }
    }
</style>
