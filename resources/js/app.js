require('./bootstrap');

window.Vue = require('vue');

Vue.component('Qna', require('./components/Qna.vue').default);

const app = new Vue({
    el: '#app',
});
