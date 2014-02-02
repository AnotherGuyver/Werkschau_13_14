var gulp = require('gulp');
var gutil = require('gulp-util');
var compass = require('gulp-compass'), path = require('path');

gulp.task('compass', function() {
    gulp.src('scss/*.scss')
        .pipe(compass({
            config_file: 'scss/config.rb',
            css:'.',
            realtive:false
        }))
        .pipe(gulp.dest('..'));
});

gulp.task('default', function(){
	console.log("It works!");
});