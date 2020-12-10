
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import throttle from "lodash.throttle";
import jump from "jump.js";
import HolyScroller from "./HolyScroller";
window.HolyScroller = HolyScroller;

require('./bootstrap');
import "flickity-imagesloaded";
import 'lazysizes';
window.Vue = require('vue');


import BookingForm from './components/BookingForm';
import ContactForm from './components/ContactForm';

Vue.component('booking-form', BookingForm);
Vue.component('contact-form', ContactForm);

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

window.addEventListener('DOMContentLoaded', () => {
   [...document.querySelectorAll('a')].filter(a => a.href == window.location.toString()).forEach(a => a.classList.add('active'));
});

if(document.querySelector('[data-banner-jump]')) {
    document.querySelector('[data-banner-jump]').addEventListener('click',e => {
        e.preventDefault();
        jump('.post-banner', {offset: -48});
    })
}
