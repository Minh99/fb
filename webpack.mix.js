let mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .postCss('resources/css/app.css', 'public/css');

mix.js([
    'resources/js/modules/admin-vl.js'
], 'public/js/modules/admin.js');

mix.js([
    'resources/js/modules/auth-vl.js'
], 'public/js/modules/auth.js');

mix.js([
    'resources/js/modules/user-vl.js'
], 'public/js/modules/user.js');


