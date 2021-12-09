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
                title: 'Каков перечень необходимых документов для заключения договора страхования?',
                content: 'Перечень необходимых документов зависит от требований страховой компании и рисков, принимаемых на страхование. Наш специалист высылает весь список необходимых документов вместе с расчетом стоимости полиса страхования.'
            },
            {
                title: 'Каков перечень необходимых документов для заключения договора страхования?',
                content: 'Перечень необходимых документов зависит от требований страховой компании и рисков, принимаемых на страхование. Наш специалист высылает весь список необходимых документов вместе с расчетом стоимости полиса страхования.'
            },
            {
                title: 'Каков перечень необходимых документов для заключения договора страхования?',
                content: 'Перечень необходимых документов зависит от требований страховой компании и рисков, принимаемых на страхование. Наш специалист высылает весь список необходимых документов вместе с расчетом стоимости полиса страхования.'
            },
            {
                title: 'Каков перечень необходимых документов для заключения договора страхования?',
                content: 'Перечень необходимых документов зависит от требований страховой компании и рисков, принимаемых на страхование. Наш специалист высылает весь список необходимых документов вместе с расчетом стоимости полиса страхования.'
            },
            {
                title: 'Каков перечень необходимых документов для заключения договора страхования?',
                content: 'Перечень необходимых документов зависит от требований страховой компании и рисков, принимаемых на страхование. Наш специалист высылает весь список необходимых документов вместе с расчетом стоимости полиса страхования.'
            },
            {
                title: 'Каков перечень необходимых документов для заключения договора страхования?',
                content: 'Перечень необходимых документов зависит от требований страховой компании и рисков, принимаемых на страхование. Наш специалист высылает весь список необходимых документов вместе с расчетом стоимости полиса страхования.'
            },
            {
                title: 'Каков перечень необходимых документов для заключения договора страхования?',
                content: 'Перечень необходимых документов зависит от требований страховой компании и рисков, принимаемых на страхование. Наш специалист высылает весь список необходимых документов вместе с расчетом стоимости полиса страхования.'
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
    .faq {
        background: #F2F3F4;
        padding: 110px 0 170px;
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
            &_title {
                display: flex;
                user-select: none;
                cursor: pointer;
                &_icon {
                    margin-right: 32px;
                    margin-top: 0.25em;
                    transition: linear 0.3s;
                    opacity: 0.2;
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
            }
        }
    }
</style>
