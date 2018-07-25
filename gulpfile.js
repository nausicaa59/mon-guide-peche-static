var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var less = require('gulp-less');
var path = require('path');
var basePath = "C:/laragon/www/guide-peche-static"
const shell = require('gulp-shell')

// Static Server + watching scss/html files
gulp.task('less', function () {
      return gulp.src('*.js', {read: false})
      .pipe(shell([
        'lessc assets/css/style.less assets/css/style.css'
      ]))
});


gulp.task('serve', ['less'], function() {

    browserSync.init({
        proxy: 'guide-peche-static.lan'
    });

    gulp.watch(basePath + "/assets/**/*.less", ['less']);
    gulp.watch(basePath + "/*.*").on('change', browserSync.reload);
    gulp.watch(basePath + "/assets/**/*.*").on('change', browserSync.reload);
});


gulp.task('default', ['serve']);