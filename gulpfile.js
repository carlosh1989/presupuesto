const elixir = require('laravel-elixir');
var notify = require("gulp-notify");
//require('laravel-elixir-vue-2');
require('laravel-elixir-jade');
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

/*elixir(mix => {
    mix.sass('app.scss')
       .webpack('app.js');
})*/

var gulp = require('gulp');
var prettify = require('gulp-jsbeautifier');

gulp.task('html', function() {
  gulp.src(['./resources/views/**/*.blade.php'])
    .pipe(prettify())
    .pipe(gulp.dest('./resources/views/'));
});

elixir(function(mix) {
    mix.jade({
   		search: '**/*.jade',
        src: '/jade/',
        dest: '/views/'
    });
});

/*elixir(function(mix) {
    mix.browserSync({
        proxy: 'project.dev'
    });
});*/