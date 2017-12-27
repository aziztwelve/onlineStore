require('./bootstrap');

window.Vue = require('vue');


import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)



let Myheader = require('./components/Myheader.vue');
let Myfooter = require('./components/Myfooter.vue');


const routes = [
  { path: '/one/home', component: Home },
  { path: '/one/about', component: About }
];


const router = new VueRouter({
  routes // сокращение от `routes: routes`
});



const app = new Vue({
    el: '#app',
    router,
    components:{Myheader,Myfooter}
});
