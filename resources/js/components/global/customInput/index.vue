<template>
    <div
        class="customInput"
        :class="{
            'customInput--error': error,
            'customInput--focused': inputIsFocused,
            'customInput--filled': value.length,
            'customInput--inactive': !active
        }"
        v-click-outside="() => { inputIsFocused = false }"
    >
        <div
            class="customInput_body"
            @click="inputIsFocused = true"
        >
            <div
                class="customInput_value"
            >
                <span class="customInput_value_title">{{ placeholder }}</span>
            </div>
            <input
                :value="value"
                :type="inputType"
                :readonly="!active"
                class="customInput_field"
                @input="handleInput"
                @focus="inputIsFocused = true"
                @blur="handleBlur"
                ref="input"
            >
            <div class="customInput_icon">
                <slot name="icon"></slot>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "customInput",
        props: {
            value: {
                type: String,
                required: true
            },
            placeholder: {
                type: String,
                default: ''
            },
            error: {
                type: Boolean,
                default: false
            },
            inputType: {
                type: String,
                default: 'text'
            },
            validation: {
                type: Function
            },
            inputOptions: {
                type: Object,
                default: () => ({})
            },
            active: {
                type: Boolean,
                default: true
            }
        },
        data: () => ({
            inputIsFocused: false
        }),
        watch: {
            inputIsFocused (v) {
                if (v) {
                    this.$refs.input.focus()
                } else {
                    this.$refs.input.blur()
                }
            }
        },
        methods: {
            handleInput (e) {
                this.$emit('input', e.target.value)
            },
            handleBlur () {
                if (this.active) {
                    this.inputIsFocused = false
                    if (this.validation) this.$emit('input', '' + this.validation(this.value))
                }
            }
        }
    }
</script>

<style lang="scss" scoped>
    @import "~@/sass/mixins.scss";
    .customInput {
        position: relative;
        user-select: none;
        z-index: 1;
        &:hover {
            .customInput_value_title {
                color: rgba(#221E1F, 1);
            }
            .customInput_icon svg path {
                fill: rgba(#221E1F, 1)
            }
        }
        &--inactive {
            .customInput {
                &_body {
                    border-bottom: 1px solid #D3D2D2 !important;
                }
                &_value_title {
                    color: rgba(#221E1F, 0.2) !important;
                    transform: translateY(0) !important;
                    &_title {
                        color: #D3D2D2 !important;
                    }
                }
                &_icon {
                    // opacity: 1 !important;
                    svg {
                        path {
                            fill: #D3D2D2 !important;
                        }
                    }
                }
            }
        }
        &--error {
            .customInput_value_title {
                color: rgba(#221E1F, 1);
            }
            .customInput_icon {
                opacity: 1;
                svg {
                    path {
                        fill: #E31C1C
                    }
                }
            }
            .customInput_body {
                border-bottom: 1px solid #E31C1C;
            }
        }
        &--focused, &--filled {
            .customInput_value_title {
                color: rgba(#221E1F, 1);
                transform: translateY(-35px);
                @include m(767) {
                    transform: translateY(-20px);
                }
            }
            .customInput_icon svg path {
                fill: rgba(#221E1F, 0.2)
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
        &_icon {
            width: 22px;
            height: 22px;
            margin-left: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            @include m(1299) {
                width: 19px;
                height: 19px;
            }
            svg {
                display: block;
                max-width: 100%;
                max-height: 100%;
                flex: 1;
                path {
                    transition: linear 0.2s;
                    fill: rgba(#221E1F, 0.2)
                }
            }
        }
        &_value {
            display: flex;
            align-items: center;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 2;
            &_title {
                display: block;
                font-size: 18px;
                line-height: 22px;
                letter-spacing: -0.02em;
                color: rgba(#221E1F, 0.2);
                transition: linear 0.2s;
                @include m(1299) {
                    font-size: 16px;
                }
            }
        }
        &_field {
            width: 100%;
            height: 100%;
            padding: 0 10px;
            background-color: transparent;
            border: none;
            outline: none;
            &::-webkit-inner-spin-button {
                display: none;
            }
        }
    }
</style>
