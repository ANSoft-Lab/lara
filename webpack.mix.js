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

mix.webpackConfig({
    resolve: {
        alias: {
            '@':  path.resolve(__dirname, 'resources/')
        }
    }
});

mix.sass('resources/scss/style.scss', 'public/css')
    .options({
//        processCssUrls: false,
        postCss: [
            require('postcss-css-variables')()
        ]
    }).version();

mix
    .js('resources/js/main.js', 'public/js')
    .js('resources/js/app.js', 'public/js')
    .js('resources/js/affiliate/affiliate.js', 'public/js')
    .scripts([
        'resources/js/affiliate/swiper-bundle.js',
        'resources/js/affiliate/autosize.min.js',
        'resources/js/affiliate/simplebar.min.js',
        'resources/js/affiliate/simple_js.js'
    ], 'public/js/affiliate-vendor.js');
