
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
import Vue from "vue";


import BookingForm from './components/BookingForm';
import ContactForm from './components/ContactForm';

Vue.component('booking-form', BookingForm);
Vue.component('contact-form', ContactForm);

import {Navbar} from "./Navbar";

import Usher from "./Usher";


const app = new Vue({
    el: '#app'
});

window.addEventListener('DOMContentLoaded', () => {
    window.usher = new Usher();
    window.navbar = new Navbar();
    window.navbar.init();

    [...document.querySelectorAll('a')].filter(a => a.href == window.location.toString()).forEach(a => a.classList.add('active'));

    function removeArrow(ev) {
        const target = ev ? ev.target : null;
        const arrows = [...document.querySelectorAll('.horizontal-scroll-arrow-indicator')];
        arrows.forEach(a => a.classList.add('hidden'));
        if(target) {
            target.removeEventListener('scroll', removeArrow);
        }
    }

    [...document.querySelectorAll('.horizontal-scroll-menu')]
        .forEach(menu => {
            const sw = menu.scrollWidth;
            const cw = menu.clientWidth;
            if(sw <= cw) {
                return removeArrow();
            }
            menu.addEventListener('scroll', removeArrow)
        })
})

const main_nav = document.querySelector('.main-nav');




window.addEventListener('scroll', throttle(() => {
    if(window.scrollY > 25) {
        return main_nav.classList.add("scrolled");
    }
    main_nav.classList.remove("scrolled");
}, 150));



if(document.querySelector('[data-banner-jump]')) {
    document.querySelector('[data-banner-jump]').addEventListener('click',e => {
        e.preventDefault();
        jump('.post-banner', {offset: -48});
    })
}
