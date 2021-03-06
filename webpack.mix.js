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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/index.js', 'public/js/index.js')
    .js('resources/js/name_result.js', 'public/js/name_result.js')
    .js('resources/js/post_content.js', 'public/js/post_content.js')
    .js('resources/js/audio_player.js', 'public/js/audio_player.js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/tag_post.scss', 'public/css');
