/* eslint-disable prefer-arrow-callback, no-mutable-exports */

const gulp = require('gulp');
const sass = require('gulp-sass');
const minify = require('gulp-minify');
const sassGlob = require('gulp-sass-glob');

gulp.task('build:sass', function buildSass() {
  return gulp.src('src/scss/style.scss')
    .pipe(sassGlob())
    .pipe(sass({ outputStyle: 'compressed' }))
    .pipe(gulp.dest('css'));
});

/**
 * Compile javascripts and minify.
 */
gulp.task('build:js', function buildJs() {
  return gulp.src('src/js/*.js')
    .pipe(minify({
      ext: {
        src: '.js',
        min: '.js',
      },
    }))
    .pipe(gulp.dest('js'));
});

gulp.task('build:all', ['build:sass', 'build:js']);
