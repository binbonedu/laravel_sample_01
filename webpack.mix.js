const { mix } = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .js('resources/assets/js/sb-admin-2.js', 'public/js')
    .less('resources/assets/less/sb-admin-2.less', 'public/css')
    .js('resources/assets/data/flot-data.js', 'public/js')
    .js('resources/assets/data/morris-data.js', 'public/js');
