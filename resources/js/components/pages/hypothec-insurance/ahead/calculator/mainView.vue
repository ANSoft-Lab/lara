<template>
    <div class="row">
        <div class="col-lg-4 col-md-12 col-5">
            <h2 class="calculator_form_title">Закажите расчёт стоимости</h2>
        </div>
        <div class="col-lg-8 col-md-12 col-7">
            <div class="row mt-35">
                <div class="col-6 col-sm-12">
                    <custom-select
                        v-model="formData.city.value"
                        :placeholder="'Город'"
                        :values="formData.city.values"
                        :error="formErrors.city"
                    >
                        <template #icon>
                            <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.364 15.364L9 21.728L2.636 15.364C1.37734 14.1053 0.520187 12.5017 0.172928 10.7559C-0.17433 9.01004 0.00390685 7.20044 0.685099 5.55591C1.36629 3.91139 2.51984 2.50579 3.99988 1.51686C5.47992 0.52793 7.21998 9.15527e-05 9 9.15527e-05C10.78 9.15527e-05 12.5201 0.52793 14.0001 1.51686C15.4802 2.50579 16.6337 3.91139 17.3149 5.55591C17.9961 7.20044 18.1743 9.01004 17.8271 10.7559C17.4798 12.5017 16.6227 14.1053 15.364 15.364ZM9 11C9.53044 11 10.0391 10.7893 10.4142 10.4142C10.7893 10.0392 11 9.53045 11 9.00001C11 8.46958 10.7893 7.96087 10.4142 7.5858C10.0391 7.21073 9.53044 7.00001 9 7.00001C8.46957 7.00001 7.96086 7.21073 7.58579 7.5858C7.21072 7.96087 7 8.46958 7 9.00001C7 9.53045 7.21072 10.0392 7.58579 10.4142C7.96086 10.7893 8.46957 11 9 11Z" fill="#221E1F"/>
                            </svg>
                        </template>
                    </custom-select>
                </div>
                <div class="col-6 col-sm-12 mt-mob">
                    <custom-input
                        v-model="formData.age.value"
                        :placeholder="'Возраст'"
                        :inputType="'number'"
                        :validation="formData.age.validation"
                        :error="formErrors.age"
                    >
                        <template #icon>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 2H19C19.2652 2 19.5196 2.10536 19.7071 2.29289C19.8946 2.48043 20 2.73478 20 3V19C20 19.2652 19.8946 19.5196 19.7071 19.7071C19.5196 19.8946 19.2652 20 19 20H1C0.734784 20 0.48043 19.8946 0.292893 19.7071C0.105357 19.5196 0 19.2652 0 19V3C0 2.73478 0.105357 2.48043 0.292893 2.29289C0.48043 2.10536 0.734784 2 1 2H5V0H7V2H13V0H15V2ZM2 8V18H18V8H2ZM4 10H6V12H4V10ZM9 10H11V12H9V10ZM14 10H16V12H14V10Z" fill="#221E1F"/>
                            </svg>
                        </template>
                    </custom-input>
                </div>
            </div>
            <div class="row mt-35">
                <div class="col-6 col-sm-12">
                    <custom-input
                        v-model="formData.bank.value"
                        :placeholder="'Банк'"
                        :inputType="'text'"
                        :error="formErrors.bank"
                    >
                        <template #icon>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 18H20V20H0V18ZM2 10H4V17H2V10ZM7 10H9V17H7V10ZM11 10H13V17H11V10ZM16 10H18V17H16V10ZM0 5L10 0L20 5V9H0V5ZM10 6C10.2652 6 10.5196 5.89464 10.7071 5.70711C10.8946 5.51957 11 5.26522 11 5C11 4.73478 10.8946 4.48043 10.7071 4.29289C10.5196 4.10536 10.2652 4 10 4C9.73478 4 9.48043 4.10536 9.29289 4.29289C9.10536 4.48043 9 4.73478 9 5C9 5.26522 9.10536 5.51957 9.29289 5.70711C9.48043 5.89464 9.73478 6 10 6Z" fill="#221E1F"/>
                            </svg>
                        </template>
                    </custom-input>
                </div>
                <div class="col-6 col-sm-12 mt-mob">
                    <custom-switch
                        :label="'Пол'"
                        v-model="formData.sex.value"
                        :values="formData.sex.values"
                    >
                        <template #icon>
                            <svg width="16" height="21" viewBox="0 0 16 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 21C0 18.8783 0.842855 16.8434 2.34315 15.3431C3.84344 13.8429 5.87827 13 8 13C10.1217 13 12.1566 13.8429 13.6569 15.3431C15.1571 16.8434 16 18.8783 16 21H0ZM8 12C4.685 12 2 9.315 2 6C2 2.685 4.685 0 8 0C11.315 0 14 2.685 14 6C14 9.315 11.315 12 8 12Z" fill="#221E1F"/>
                            </svg>
                        </template>
                    </custom-switch>
                </div>
            </div>
            <div class="row mt-35">
                <div class="col-6 col-sm-12">
                    <custom-input
                        v-model="formData.debtAmount.value"
                        :placeholder="'Сумма долга'"
                        :inputType="'number'"
                        :validation="formData.debtAmount.validation"
                        :error="formErrors.debtAmount"
                    >
                        <template #icon>
                            <svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.33 9.5H10.5C11.6935 9.5 12.8381 9.97411 13.682 10.818C14.5259 11.6619 15 12.8065 15 14H7.999L8 15H16V14C15.9968 12.936 15.6894 11.895 15.114 11H18C18.9453 10.9997 19.8712 11.2674 20.6705 11.772C21.4698 12.2767 22.1097 12.9975 22.516 13.851C20.151 16.972 16.322 19 12 19C9.239 19 6.9 18.41 5 17.375V8.071C6.21661 8.24528 7.36547 8.73829 8.33 9.5ZM4 17C4 17.2652 3.89464 17.5196 3.70711 17.7071C3.51957 17.8946 3.26522 18 3 18H1C0.734784 18 0.48043 17.8946 0.292893 17.7071C0.105357 17.5196 0 17.2652 0 17V8C0 7.73478 0.105357 7.48043 0.292893 7.29289C0.48043 7.10536 0.734784 7 1 7H3C3.26522 7 3.51957 7.10536 3.70711 7.29289C3.89464 7.48043 4 7.73478 4 8V17ZM17 3C17.7956 3 18.5587 3.31607 19.1213 3.87868C19.6839 4.44129 20 5.20435 20 6C20 6.79565 19.6839 7.55871 19.1213 8.12132C18.5587 8.68393 17.7956 9 17 9C16.2044 9 15.4413 8.68393 14.8787 8.12132C14.3161 7.55871 14 6.79565 14 6C14 5.20435 14.3161 4.44129 14.8787 3.87868C15.4413 3.31607 16.2044 3 17 3ZM10 0C10.7956 0 11.5587 0.316071 12.1213 0.87868C12.6839 1.44129 13 2.20435 13 3C13 3.79565 12.6839 4.55871 12.1213 5.12132C11.5587 5.68393 10.7956 6 10 6C9.20435 6 8.44129 5.68393 7.87868 5.12132C7.31607 4.55871 7 3.79565 7 3C7 2.20435 7.31607 1.44129 7.87868 0.87868C8.44129 0.316071 9.20435 0 10 0Z" fill="#221E1F"/>
                            </svg>
                        </template>
                    </custom-input>
                </div>
                <div class="col-6 col-sm-12">
                    <custom-input
                        v-model="formData.phone.value"
                        :placeholder="'Контактный телефон'"
                        :inputType="'text'"
                        :error="formErrors.phone"
                    >
                        <template #icon>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 18H20V20H0V18ZM2 10H4V17H2V10ZM7 10H9V17H7V10ZM11 10H13V17H11V10ZM16 10H18V17H16V10ZM0 5L10 0L20 5V9H0V5ZM10 6C10.2652 6 10.5196 5.89464 10.7071 5.70711C10.8946 5.51957 11 5.26522 11 5C11 4.73478 10.8946 4.48043 10.7071 4.29289C10.5196 4.10536 10.2652 4 10 4C9.73478 4 9.48043 4.10536 9.29289 4.29289C9.10536 4.48043 9 4.73478 9 5C9 5.26522 9.10536 5.51957 9.29289 5.70711C9.48043 5.89464 9.73478 6 10 6Z" fill="#221E1F"/>
                            </svg>
                        </template>
                    </custom-input>
                </div>
            </div>
<!--
            <div class="row mt-35">
                <div class="col-6 col-sm-12">
                    <custom-switch
                        :label="'Созаемщик'"
                        v-model="formData.haveCoBorrower.value"
                        :values="formData.haveCoBorrower.values"
                    >
                        <template #icon>
                            <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 21C0 18.8783 0.842855 16.8434 2.34315 15.3431C3.84344 13.8429 5.87827 13 8 13C10.1217 13 12.1566 13.8429 13.6569 15.3431C15.1571 16.8434 16 18.8783 16 21H0ZM8 12C4.685 12 2 9.315 2 6C2 2.685 4.685 0 8 0C11.315 0 14 2.685 14 6C14 9.315 11.315 12 8 12Z" fill="#221E1F" />
                                <path d="M14 21C14 19.6865 14.5268 18.4269 15.4645 17.4981C16.4021 16.5694 17.6739 16.0476 19 16.0476C20.3261 16.0476 21.5979 16.5694 22.5355 17.4981C23.4732 18.4269 24 19.6865 24 21H14ZM19 15.4286C16.9281 15.4286 15.25 13.7664 15.25 11.7143C15.25 9.66214 16.9281 8 19 8C21.0719 8 22.75 9.66214 22.75 11.7143C22.75 13.7664 21.0719 15.4286 19 15.4286Z" fill="#221E1F"/>
                            </svg>
                        </template>
                    </custom-switch>
                </div>
                <div class="col-6 col-sm-12 mt-mob">
                    <custom-input
                        v-model="formData.coBorrowerPercent.value"
                        :placeholder="'Процент созаемщика'"
                        :inputType="'number'"
                        :validation="formData.coBorrowerPercent.validation"
                        :error="formErrors.coBorrowerPercent"
                        :active="formData.haveCoBorrower.value === 'Да'"
                    >
                        <template #icon>
                            <svg width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.314 16H3.74L13.068 0.599999H15.62L6.314 16ZM4.4 0.291999C5.61733 0.291999 6.54133 0.680666 7.172 1.458C7.81733 2.22067 8.14 3.22533 8.14 4.472C8.14 5.71867 7.81733 6.72333 7.172 7.486C6.54133 8.234 5.61733 8.608 4.4 8.608C3.18267 8.608 2.25867 8.234 1.628 7.486C0.997333 6.72333 0.682 5.71867 0.682 4.472C0.682 3.22533 0.997333 2.22067 1.628 1.458C2.27333 0.680666 3.19733 0.291999 4.4 0.291999ZM4.4 6.54C5.324 6.54 5.786 5.85067 5.786 4.472C5.786 3.064 5.324 2.36 4.4 2.36C3.49067 2.36 3.036 3.064 3.036 4.472C3.036 5.85067 3.49067 6.54 4.4 6.54ZM14.938 7.97C16.1553 7.97 17.0793 8.35867 17.71 9.136C18.3553 9.89867 18.678 10.9033 18.678 12.15C18.678 13.3967 18.3553 14.4013 17.71 15.164C17.0793 15.912 16.1553 16.286 14.938 16.286C13.7207 16.286 12.7967 15.912 12.166 15.164C11.5353 14.4013 11.22 13.3967 11.22 12.15C11.22 10.9033 11.5353 9.89867 12.166 9.136C12.8113 8.35867 13.7353 7.97 14.938 7.97ZM14.938 14.218C15.862 14.218 16.324 13.5287 16.324 12.15C16.324 10.742 15.862 10.038 14.938 10.038C14.0287 10.038 13.574 10.742 13.574 12.15C13.574 13.5287 14.0287 14.218 14.938 14.218Z" fill="black"/>
                            </svg>
                        </template>
                    </custom-input>
                </div>
            </div>
-->
            <div class="row">
                <button @click="validate" class="calculator_submit-btn">Отправить заявку</button>
            </div>
        </div>
    </div>
</template>

<script>
import customSelect from '@/js/components/global/customSelect'
import CustomInput from '@/js/components/global/customInput/index'
import CustomSwitch from '@/js/components//global/customSwitch/index'
export default {
    name: "calculatorMainView",
    data: () => ({
        formData: {
            city: {
                value: '',
                values: [
                    'Москва',
                    'Не Москва'
                ]
            },
            age: {
                value: '',
                validation: (v) => {
                    let result = +v
                    if (result < 18) return 18
                    if (result > 90) return 90
                    return result
                }
            },
            bank: {
                value: ''
            },
            phone: {
                value: '',
                validation: (v) => {
                    if(v.replace(/[^0-9]/, '').match(/^[0-9]{10,11}/))
                        return true
                    else
                        return false
                }
            },
            sex: {
                value: 'М',
                values: ['М', 'Ж']
            },
            debtAmount: {
                value: '',
                validation: v => {
                    let result = +v
                    if (result <= 0) return 0
                    return result
                }
            },
            risks: {
                value: 'Да',
                values: [
                    'Да',
                    'Не да'
                ]
            },
            haveCoBorrower: {
                value: 'Нет',
                values: [
                    'Да',
                    'Нет'
                ]
            },
            coBorrowerPercent: {
                value: '',
                validation: v => {
                    let result = +v
                    if (result <= 0) return 0
                    if (result >= 100) return 100
                    return result
                }
            }
        },
        formErrors: {
            city: false,
            age: false,
            bank: false,
            debtAmount: false,
            risks: false,
            phone: false,
            coBorrowerPercent: false
        },
    }),
    watch: {
        'formData.haveCoBorrower.value' (v) {
            if (v === 'Нет') {
                this.formData.coBorrowerPercent.value = ''
            }
        }
    },
    methods: {
        validate () {
            const vm = this
            let errorsCount = 0
            for (const key of Object.keys(vm.formErrors)) {
                if (key !== 'coBorrowerPercent') {
                    if (!vm.formData[key].value.length) {
                        errorsCount++
                        vm.formErrors[key] = true
                    } else vm.formErrors[key] = false
                } else {
                    if (vm.formData.haveCoBorrower.value === 'Да' && !vm.formData[key].value.length) {
                        errorsCount++
                        vm.formErrors[key] = true
                    } else vm.formErrors[key] = false
                }
            }
            if (!errorsCount) {
                const requestBody = {}
                for (const [key, value] of Object.entries(vm.formData)) {
                    requestBody[key] = value.value
                }
                vm.$emit('onSuccess', requestBody)
                console.log(requestBody)
            } else {
                console.log(errorsCount)
                console.log(vm.formErrors)
            }
        }
    },
    components: {
        CustomSwitch,
        CustomInput,
        customSelect
    }
}
</script>
