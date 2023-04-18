const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/core/app.js', 'public/js/core')
    .js('resources/js/bootstrap/bootstrap.min.js', 'public/js/bootstrap')
    .postCss('resources/css/app.css', 'public/css')
    .postCss('resources/css/bootstrap/bootstrap.css', 'public/css/bootstrap');
