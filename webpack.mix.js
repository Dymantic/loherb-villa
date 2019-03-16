const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
require('laravel-mix-purgecss');


/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
   .less('resources/less/app.less', 'public/css')
   .options({
       postCss: [
           tailwindcss('./tailwind.js'),
       ]
   })
   .purgeCss(
       {
           globs: [
               path.join(__dirname, 'node_modules/flickity/**/*.js'),
           ],

           extensions: ['html', 'js', 'php', 'vue'],

           whitelistPatterns: [/room-banner$/, /iframe/, /img/, /figure/],

           whitelistPatternsChildren: [/-room$/, /^journal-entry/],
       }
   )
   .version();
