require('./bootstrap');
import HypothecInsurance from './views/hypothec-insurance.vue'

window.Vue = require('vue');

Vue.component('Qna', require('./components/Qna.vue').default);

const app = new Vue({
    el: '#app',
});

