


require('./bootstrap');

window.Vue = require('vue');


// Vue.component('example-component', require('./components/ExampleComponent.vue'));
let Myheader = require('./components/Myheader.vue');



const app = new Vue({
    el: '#app',
    components:{Myheader},
});
