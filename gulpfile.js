var buildDirectory = 'public/assets';
var versionFile = 'gulpfile.version.txt';

var gulp = require('gulp');
var plumber = require('gulp-plumber');
var sass = require('gulp-sass');
var cssmin = require('gulp-cssmin');
var clean = require('gulp-clean');
var watch = require('gulp-watch');
var concat = require('gulp-concat');
var fs = require('fs');
var autoprefixer = require('gulp-autoprefixer');

function getVersion() {
    return fs.readFileSync(versionFile, 'utf-8');
}

gulp.task('clean', function () {
    if (fs.existsSync(buildDirectory)) {
        return gulp.src([buildDirectory + '/*.*'])
            .pipe(plumber())
            .pipe(clean());
    }
    return false;
});

gulp.task('updateVersion', ['clean'], function () {
    return fs.writeFileSync(versionFile, Math.floor(Date.now() / 1000), 'utf8');
});

gulp.task('styles', ['updateVersion'], function () {
    return gulp.src([
        'resources/assets/scss/app.scss'
    ])
        .pipe(plumber())
        .pipe(sass())
        .pipe(cssmin())
        .pipe(concat(getVersion() + '.css'))
        .pipe(gulp.dest(buildDirectory));
});

gulp.task('scripts', ['styles'], function () {
    return gulp.src([
        'resources/assets/js/jquery-3.3.1.min.js',
        'resources/assets/js/jquery.backstretch.min.js',
        'resources/assets/js/app.js',
    ])
        .pipe(plumber())
        .pipe(concat(getVersion() + '.js'))
        .pipe(gulp.dest(buildDirectory));
});

gulp.task('html', ['scripts'], function () {

    var assetsData = "<link rel=\"stylesheet\" href=\"/assets/" + getVersion() + ".css\">\n";
    assetsData += "<script src=\"/assets/" + getVersion() + ".js\"></script>";

    return fs.writeFileSync('resources/views/assets.blade.php', assetsData, 'utf8');

});

gulp.task('default', ['html'], function () {

});

gulp.task('refresh', ['default'], function () {

});

gulp.task('watch', ['default'], function () {
    gulp.watch([
        'gulpfile.js',
        'resources/assets/**/*.js',
        'resources/assets/**/*.scss'
    ], ['refresh'])
});
