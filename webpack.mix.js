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

mix.js('resources/js/app.js', 'public/js')
   .js('resources/js/lib.js', 'public/js').vue()
   .js('resources/js/Playground/VueMastery/Vue.js', 'public/js').vue()
   .sass('resources/sass/custom.scss', 'public/css')
   .sass('resources/sass/Playground/VueMastery/vue-dynamic-mastery.scss', 'public/css')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ]);



if (mix.inProduction()) {
    mix.version();
}
