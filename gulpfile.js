'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var rename = require ('gulp-rename');
let cleanCSS = require('gulp-clean-css');
var exec = require('child_process').exec;

//compile
gulp.task('sass', function () {
	gulp.src('app/scss/app.scss')
	.pipe(sass().on('error', sass.logError))
	.pipe(gulp.dest('app/css'));
});

gulp.task('minify-css', () => {
	return gulp.src('app/css/app.css')
	.pipe(rename({suffix: '.min'}))
	.pipe(cleanCSS({debug: true}, (details) => {
		console.log(`${details.name}: ${details.stats.originalSize}`);
		console.log(`${details.name}: ${details.stats.minifiedSize}`);
	}))
	.pipe(gulp.dest('app/css'));
});

//compile and watch
gulp.task('watch', function(){
	gulp.watch('app/scss/**/*.scss', ['sass']);
	gulp.watch('app/css/**/*.css', ['minify-css']);
});

gulp.task('file_changes', function(cb) {
	exec("./build.sh", function(err, stdout, stderr) {
		console.log(stderr);
		console.log(stdout);
		cb(err);
	});
});
