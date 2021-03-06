const elixir = require('laravel-elixir');
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */
elixir.config.sourcemaps = false;

elixir((mix) => {
    mix.sass('app.sass','public/css/')
       .webpack('app.js')
       .browserSync({
        proxy: 'futura.dev'
    });
});
