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

/*mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);*/

mix.styles([
    'resources/assets/admin/plugin/fontawesome-free/css/all.css',
    'resources/assets/admin/plugin/select2/css/select2.css',
    'resources/assets/admin/plugin/select2-bootstrap4-theme/select2-bootstrap4.css',
    'resources/assets/admin/css/adminlte.css',
], 'public/assets/admin/css/admin.css');

mix.styles([
    'resources/assets/user/plugin/icheck-bootstrap/icheck-bootstrap.css',
], 'public/assets/user/css/user.css');

mix.scripts([
    'resources/assets/admin/plugin/jquery/jquery.js',
    'resources/assets/admin/plugin/bootstrap/js/bootstrap.bundle.js',
    'resources/assets/admin/plugin/select2/js/select2.full.js',
    'resources/assets/admin/plugin/bs-custom-file-input/bs-custom-file-input.js',
    'resources/assets/admin/js/adminlte.js',
    'resources/assets/admin/js/demo.js',
], 'public/assets/admin/js/admin.js');

mix.copyDirectory('resources/assets/admin/img', 'public/assets/admin/img');
mix.copyDirectory('resources/assets/admin/plugin/fontawesome-free/webfonts', 'public/assets/admin/webfonts');

mix.copy('resources/assets/admin/js/adminlte.js.map', 'public/assets/admin/js/adminlte.js.map');
mix.copy('resources/assets/admin/css/adminlte.min.css.map', 'public/assets/admin/css/adminlte.css.map');

mix.styles([
    'resources/assets/front/css/bootstrap.css',
    'resources/assets/front/css/font-awesome.min.css',
    'resources/assets/front/style.css',
    'resources/assets/front/css/animate.css',
    'resources/assets/front/css/responsive.css',
    'resources/assets/front/css/colors.css',
    'resources/assets/front/css/version/marketing.css',
], 'public/assets/front/css/front.css');

mix.scripts([
    'resources/assets/front/js/jquery.min.js',
    'resources/assets/front/js/tether.min.js',
    'resources/assets/front/js/bootstrap.js',
    'resources/assets/front/js/animate.js',
    'resources/assets/front/js/custom.js',
], 'public/assets/front/js/front.js');

mix.copyDirectory('resources/assets/front/fonts', 'public/assets/front/fonts');
mix.copyDirectory('resources/assets/front/images', 'public/assets/front/images');
mix.copyDirectory('resources/assets/front/upload', 'public/assets/front/upload');
