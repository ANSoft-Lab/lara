<template>
    <section class="qna mb-40">
        <ul class="qna__list">
            <li class="qna__list-item js-list-item" @click="showDropdown" v-for="item in faq" :key="item.id">
                <p class="qna__list-title js-dropdown-list">
                    {{item.question}}
                </p>
                <p class="qna__dropdown" v-html="item.answer">
                </p>
            </li>
        </ul>
    </section>
</template>
<script>
export default {
    name: "qna",
    props: {
        faq: Array
    },
    methods: {
        showDropdown(evt) {
            if ($(evt.currentTarget).hasClass('m-visible')) {
                $(evt.currentTarget).removeClass('m-visible')
                $(evt.currentTarget).find('.js-dropdown-list').removeClass('m-visible')
            } else {
                $(evt.currentTarget).addClass('m-visible')
                $(evt.currentTarget).find('.js-dropdown-list').addClass('m-visible')
            }
        }
    }
}
</script>

<style scoped>

</style>
