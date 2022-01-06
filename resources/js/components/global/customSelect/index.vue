<template>
    <div
        class="customSelect"
        :class="{
            'customSelect--error': error,
            'customSelect--filled': value,
            'customSelect--focused': dialogIsOpened
        }"
        v-click-outside="() => { dialogIsOpened = false }"
    >
        <div
            class="customSelect_body"
            @click="dialogIsOpened = !dialogIsOpened"
        >
            <div class="customSelect_value">
                <span class="customSelect_value_title">{{ value || placeholder }}</span>
                <svg class="customSelect_value_icon" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1.65625L5.65625 6.3125L10.3125 1.65625" stroke-width="2"/>
                </svg>
            </div>
            <div class="customSelect_icon">
                <slot name="icon"></slot>
            </div>
        </div>
        <div class="customSelect_values" v-if="dialogIsOpened">
            <ul class="customSelect_values_list">
                <li
                    class="customSelect_values_item"
                    v-for="(value, i) in values"
                    @click="selectValue(value)"
                    :key="i"
                >
                    {{ value }}
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    name: "customSelect",
    props: {
        value: {
            type: String,
            required: true
        },
        placeholder: {
            type: String,
            default: ''
        },
        values: {
            type: Array,
            required: true
        },
        error: {
            type: Boolean,
            default: false
        }
    },
    data: () => ({
        dialogIsOpened: false
    }),
    methods: {
        selectValue (value) {
            const vm = this
            vm.dialogIsOpened = false
            vm.$emit('input', value)
        }
    }
}
</script>

<style lang="scss" scoped>
    @import "~@/sass/mixins.scss";
    .customSelect {
        position: relative;
        z-index: 1;
        user-select: none;
        &:hover, &--filled {
            .customSelect_value {
                opacity: 1;
            }
            .customSelect_icon {
                opacity: 1;
            }
        }
        &--error {
            .customSelect_value {
                opacity: 1;
            }
            .customSelect_icon {
                opacity: 1;
                svg {
                    path {
                        fill: #E31C1C
                    }
                }
            }
            .customSelect_body {
                border-bottom: 1px solid #E31C1C;
            }
        }
        &--focused {
            z-index: 2;
        }
        &_body {
            display: flex;
            align-items: center;
            height: 62px;
            border-bottom: 1px solid rgba(#221E1E, 0.3);
            cursor: pointer;
            @include m(1299) {
                height: 56px;
            }
        }
        &_values {
            position: absolute;
            z-index: 2;
            margin-top: -1px;
            background-color: #fff;
            top: 100%;
            left: 0;
            right: 0;
            padding: 10px;
            max-height: 250px;
            overflow-y: auto;
            box-shadow: 0 0 5px rgba(#000, 0.1);
            &_list {
                display: block;
            }
            &_item {
                display: block;
                cursor: pointer;
                font-size: 16px;
                line-height: 252.69%;
                letter-spacing: -0.02em;
                color: #221E1F;
                transition: linear 0.3s;
                &:hover {
                    opacity: 0.5;
                }
            }
        }
        &_icon {
            width: 22px;
            height: 22px;
            margin-left: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0.2;
            transition: linear 0.2s;
            @include m(1299) {
                width: 19px;
                height: 19px;
            }
            svg {
                display: block;
                max-width: 100%;
                max-height: 100%;
                flex: 1;
            }
        }
        &_value {
            display: flex;
            align-items: center;
            transition: linear 0.2s;
            opacity: 0.2;
            &_title {
                display: block;
                font-size: 18px;
                line-height: 22px;
                letter-spacing: -0.02em;
                color: #221E1F;
                @include m(1299) {
                    font-size: 16px;
                }
            }
            &_icon {
                display: block;
                margin-left: 20px;
                margin-top: 3px;
                path {
                    stroke: #221E1F;
                }
            }
        }
    }
</style>
