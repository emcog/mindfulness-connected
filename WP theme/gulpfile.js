'use strict';

var gulp        = require('gulp');
var sass        = require('gulp-sass');
var connect     = require('gulp-connect');
var notify      = require('gulp-notify');
var imagemin    = require('gulp-imagemin');
var gutil       = require('gulp-util');
var sourcemaps  = require('gulp-sourcemaps');
var uglify      = require('gulp-uglify');
var concat      = require('gulp-concat');

// Config
var config = {
    srcFolder: './lib/',
    buildFolder: './lib/',
    production: !!gutil.env.production,
    patterns: {
        'sass': 'css/scss/**/*.scss'
    }
};

// Tasks
gulp.task('sass', function () {
    return gulp.src(config.srcFolder + config.patterns.sass)
        .pipe(config.production ? gutil.noop() : sourcemaps.init())
        .pipe(sass({
            outputStyle: config.production ? 'compressed' : 'expanded'
        }).on('error', sass.logError))
        .pipe(config.production ? gutil.noop() : sourcemaps.write())
        .pipe(gulp.dest(config.buildFolder + 'css/'))
        .pipe(connect.reload())
        .pipe(config.production ? gutil.noop() : notify("Sass succesfully compiled"));
});

gulp.task('watch', function () {
    gulp.watch( config.srcFolder + config.patterns.sass, ['sass']);
});

gulp.task('default', ['sass']);
