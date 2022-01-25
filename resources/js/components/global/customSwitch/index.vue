<template>
    <div
        class="customSwitch"
        :class="{
            'customSwitch--selected': value
        }"
    >
        <div class="customSwitch_icon">
            <slot name="icon"></slot>
        </div>
        <span class="customSwitch_label">{{ label }}</span>
        <div class="customSwitch_buttons-group">
            <button
                v-for="(val, i) in values"
                :key="i"
                class="customSwitch_button"
                :class="{
                    'customSwitch_button--selected': val === value
                }"
                @click="$emit('input', val)"
            >
                {{ val }}
            </button>
        </div>
    </div>
</template>

<script>
export default {
    name: "customSwitch",
    props: {
        label: {
            type: String,
            required: true
        },
        value: {
            type: String,
            required: true
        },
        values: {
            type: Array,
            required: true
        }
    }
}
</script>

<style lang="scss" scoped>
    @import "~@/sass/mixins.scss";
    .customSwitch {
        margin-top: 8px;
        display: flex;
        align-items: center;
        user-select: none;
        &:hover, &--selected {
            .customSwitch {
                &_icon {
                    opacity: 1;
                }
                &_label {
                    opacity: 1;
                }
            }
        }
        &_icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 24px;
            height: 24px;
            transition: linear 0.2s;
            opacity: 0.2;
            svg {
                display: block;
            }
        }
        &_label {
            display: block;
            margin-left: 14px;
            font-size: 18px;
            line-height: 22px;
            letter-spacing: -0.02em;
            color: #221E1F;
            transition: linear 0.2s;
            opacity: 0.2;
            @include m(1299) {
                font-size: 16px;
                margin-left: 10px;
            }
        }
        &_buttons-group {
            display: flex;
            margin-left: 28px;
            overflow: hidden;
            border-radius: 5px;
            border: 1px solid rgba(#000, 0.1);
            height: 50px;
            @include m(1299) {
                margin-left: 10px;
                height: 46px;
            }
        }
        &_button {
            outline: none;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            padding: 0 22px;
            height: 100%;
            font-size: 18px;
            line-height: 22px;
            letter-spacing: -0.02em;
            text-transform: uppercase;
            color: #221E1F;
            border: none;
            background-color: transparent;
            transition: linear 0.2s;
            @include m(1299) {
                padding: 0 15px;
                font-size: 16px;
                line-height: 1.2;
            }
            &--selected {
                background-color: rgba(darken(#F2F3F4, 10%), 0.8);
            }
        }
    }
</style>
