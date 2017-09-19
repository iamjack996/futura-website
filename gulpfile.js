const elixir = require('laravel-elixir');
elixir.config.css.autoprefix = {
    enabled: true, //default, this is only here so you know how to disable
    options: {
        cascade: true,
        browsers: ['last 2 versions', '> 5%']
    }
};
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
    //    .copy('node_modules/bootstrap/dist/js/bootstrap.min.js','resources/assets/js/js')
       .browserSync({
        proxy: '127.0.0.1'
    });
});
