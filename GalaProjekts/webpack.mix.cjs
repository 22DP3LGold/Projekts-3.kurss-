const mix = require('laravel-mix');

mix.setPublicPath('public')
   .js('resources/js/app.js', 'public/js')
   .js('resources/js/welcome.js', 'public/js')
   .css('resources/css/welcome.css', 'public/css')
   .version();