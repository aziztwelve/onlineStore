require('./bootstrap');

// window.Vue = require('vue');


// import Vue from 'vue'
// import VueRouter from 'vue-router'

// Vue.use(VueRouter)


// Vue.component('example', require('./components/Example.vue'));

let Myheader = require('./components/Myheader.vue');
let Myfooter = require('./components/Myfooter.vue');
let AddCard = require('./components/Myfooter.vue');


// const routes = [
//   { path: '/one/home', component: Home },
//   { path: '/one/about', component: About }
// ];

 
// const router = new VueRouter({
//   routes // сокращение от `routes: routes`
// });



// const app = new Vue({
//     el: '#app',
//     router,
//     components:{Myheader,Myfooter}
// });


// Vue.component('example', require('./components/Example.vue'));
Vue.component('chat-message', require('./components/ChatMessage.vue'));
// Vue.component('add-card', require('./components/AddCard.vue'));

const app = new Vue({
    el: '#app',
    components:{Myheader,Myfooter,AddCard}
});









// $(function() {
//         $('.material-card > .mc-btn-action').click(function () {
//             var card = $(this).parent('.material-card');
//             var icon = $(this).children('i');
//             icon.addClass('fa-spin-fast');

//             if (card.hasClass('mc-active')) {
//                 card.removeClass('mc-active');

//                 window.setTimeout(function() {
//                     icon
//                         .removeClass('fa-arrow-left')
//                         .removeClass('fa-spin-fast')
//                         .addClass('fa-bars');

//                 }, 800);
//             } else {
//                 card.addClass('mc-active');

//                 window.setTimeout(function() {
//                     icon
//                         .removeClass('fa-bars')
//                         .removeClass('fa-spin-fast')
//                         .addClass('fa-arrow-left');

//                 }, 800);
//             }
//         });
//     });