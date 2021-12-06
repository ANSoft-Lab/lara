<template>
    <div class="row calculator_loadingView">
        <div class="col-12">
            <svg class="calculator_loadingView_spinner" width="112" height="112" viewBox="0 0 112 112" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle r="8.98899" transform="matrix(-0.707107 0.707107 0.707107 0.707107 98.5469 24.6508)" fill="#221E1F"/>
                <circle opacity="0.4" r="9" transform="matrix(-1 0 0 1 61 9)" fill="#221E1F"/>
                <circle opacity="0.1" r="9" transform="matrix(-1 0 0 1 9 62)" fill="#221E1F"/>
                <circle opacity="0.1" r="8.98899" transform="matrix(-0.707107 0.707107 0.707107 0.707107 24.3223 98.875)" fill="#221E1F"/>
                <circle opacity="0.2" r="8.98899" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 24.3228 24.6514)" fill="#221E1F"/>
            </svg>
        </div>
    </div>
</template>

<script>
export default {
    name: "calculatorLoadingView"
}
</script>

<style lang="scss" scoped>
    @keyframes spinner {
        0% {
            transform: translate(-50%, -50%) rotate(0deg);
        }
        100% {
            transform: translate(-50%, -50%) rotate(360deg);
        }
    }
    .calculator {
        &_loadingView {
            height: 100%;
            position: relative;
            &_spinner {
                position: absolute;
                top: 50%;
                left: 50%;
                z-index: 2;
                width: 110px;
                height: 110px;
                animation: spinner linear 1.4s infinite;
            }
        }
    }
</style>
