var
    gulp = require('gulp'),
    rename = require('gulp-rename'),
    prefixer = require('gulp-autoprefixer'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    livereload = require('gulp-livereload'),
    uglify = require('gulp-uglify-es').default,
    notify = require('gulp-notify'),
    plumber = require('gulp-plumber'),
    iife = require('gulp-iife');

var onError = function(err) {
    notify.onError({
        title:    "Gulp",
        subtitle: "Failure!",
        message:  "Error: <%= error.message %>",
        sound:    "Beep"
    })(err);

    this.emit('end');
};

gulp.task('scripts', function() {
    return gulp.src('assets/js/app.js')
        .pipe(plumber({ errorHandler: onError }))
        .pipe(rename({ suffix: '.min' }))
        .pipe(uglify())
        .pipe(iife())
        .pipe(gulp.dest('public/dist'))
        .pipe(livereload())
});

gulp.task('styles', function() {
    return gulp.src('assets/scss/style.scss')
        .pipe(plumber({ errorHandler: onError }))
        .pipe(sourcemaps.init())
        .pipe(sass({
            outputStyle: 'compressed'
        }))
        .pipe(prefixer([
            'last 2 versions',
            '> 0.2%',
            'ie >= 9'
        ]))
        .pipe(sourcemaps.write())
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest('public/dist'))
        .pipe(livereload())
});

gulp.task('watch', function() {
    livereload.listen();
    gulp.watch('assets/js/**/*.js', ['scripts']);
    gulp.watch('assets/scss/**/*.scss', ['styles']);
});

gulp.task('default', ['watch']);