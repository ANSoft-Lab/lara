const mix = require('laravel-mix');

mix
    .sass('resources/scss/style.scss', 'public/css/style.css')

    .js('resources/js/app.js', 'public/js/app.js');
