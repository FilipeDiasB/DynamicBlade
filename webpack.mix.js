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

mix
    .sass('resources/scss/reset.scss', 'public/backend/assets/css/reset.css')
    .sass('resources/scss/boot.scss', 'public/backend/assets/css/boot.css')
    .sass('resources/scss/login.scss', 'public/backend/assets/css/login.css')
    .sass('resources/scss/style.scss', 'public/backend/assets/css/style.css')

    .styles([
        'resources/js/datatables/css/jquery.dataTables.min.css',
        'resources/js/datatables/css/responsive.dataTables.min.css',
        'resources/js/select2/css/select2.min.css'
    ], 'public/backend/assets/css/libs.css')

    .scripts([
        'resources/js/jquery.min.js'
    ], 'public/backend/assets/js/jquery.js')

    .scripts([
        'resources/js/scripts.js'
    ], 'public/backend/assets/js/scripts.js')

    .scripts([
        'resources/js/datatables/js/jquery.dataTables.min.js',
        'resources/js/datatables/js/dataTables.responsive.min.js',
        'resources/js/select2/js/select2.min.js',
        'resources/js/select2/js/i18n/pt-BR.js',
        'resources/js/jquery.form.js',
        'resources/js/jquery.mask.js',
        'resources/js/tinymce/tinymce.min.js'
    ], 'public/backend/assets/js/libs.js')

    .copyDirectory('resources/js/datatables', 'public/backend/assets/css/js/datatables')
    .copyDirectory('resources/js/select2', 'public/backend/assets/css/js/select2')
    .copyDirectory('resources/js/tinymce', 'public/backend/assets/css/js/tinymce')

    .copyDirectory('resources/css/fonts', 'public/backend/assets/css/fonts')

    .options({
        processCssUrls: false
    })

    .version();

