const mix = require('laravel-mix');

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

mix.js('resources/js/main.js', 'public/js')
     .js('resources/js/app.js', 'public/js')

     .js('resources/js/affiliate/affiliate.js', 'public/js')
     .scripts([
        'resources/js/affiliate/swiper-bundle.js',
        'resources/js/affiliate/autosize.min.js',
        'resources/js/affiliate/simplebar.min.js',
        'resources/js/affiliate/simple_js.js'
     ], 'public/js/affiliate-vendor.js')
 
    .sass('resources/scss/style.scss', 'public/css')
        .options({
            postCss: [
                require('postcss-css-variables')()
            ]
        }).version();
