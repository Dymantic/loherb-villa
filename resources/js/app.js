
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import throttle from "lodash.throttle";

require('./bootstrap');
import "flickity";
window.Vue = require('vue');


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('booking-form', require('./components/BookingForm'));
Vue.component('contact-form', require('./components/ContactForm'));

const app = new Vue({
    el: '#app'
});

const nav_trigger = document.querySelector('#nav-trigger');
const main_nav = document.querySelector('.main-nav');

nav_trigger.addEventListener('click', () => {
    if(main_nav.classList.contains('expose')) {
        document.body.classList.remove('nav-open');
        return main_nav.classList.remove('expose');
    }
    document.body.classList.add('nav-open');
    main_nav.classList.add('expose')
}, false);

window.addEventListener('scroll', throttle(() => {
    if(window.scrollY > 25) {
        return main_nav.classList.add("scrolled");
    }
    main_nav.classList.remove("scrolled");
}, 150));