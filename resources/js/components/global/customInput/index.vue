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
    .customInput {
        position: relative;
        user-select: none;
        z-index: 1;
        &:hover {
            .customInput_value {
                opacity: 1;
            }
            .customInput_icon {
                opacity: 1;
            }
        }
        &--inactive {
            .customInput {
                &_body {
                    border-bottom: 1px solid #D3D2D2 !important;
                }
                &_value {
                    opacity: 1 !important;
                    transform: translateY(-50%) !important;
                    &_title {
                        color: #D3D2D2 !important;
                    }
                }
                &_icon {
                    opacity: 1 !important;
                    svg {
                        path {
                            fill: #D3D2D2 !important;
                        }
                    }
                }
            }
        }
        &--error {
            .customInput_value {
                opacity: 1;
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
            .customInput_value {
                opacity: 1;
                transform: translateY(-35px);
            }
            .customInput_icon {
                opacity: 1;
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
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 2;
            &_title {
                display: block;
                font-size: 18px;
                line-height: 22px;
                letter-spacing: -0.02em;
                color: #221E1F;
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
