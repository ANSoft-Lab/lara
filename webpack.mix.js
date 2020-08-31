const mix = require('laravel-mix');
const autoprefixer = require('autoprefixer');

module.exports = {
    module: {
        postcss: function () {
            return [autoprefixer];
        }
    }
};

mix
    .sass('resources/scss/style.scss', 'public/css/style.css')

    .js('resources/js/app.js', 'public/js/app.js');
