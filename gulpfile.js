const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const browserSync = require('browser-sync').create();
// const autoprefixer = require('gulp-autoprefixer');
// const postcss = require('gulp-postcss');

// function style() {
//     return gulp.src('./scss/**/*.scss')
//         .pipe(sass())
//         // .pipe(autoprefixer({
//         //     cascade: false
//         // }))
//         .pipe(gulp.dest('./css'))
//         .pipe(browserSync.stream());
// }
function style() {
    return gulp.src('./scss_mob/**/style_mob.scss')
        .pipe(sass())
        // .pipe(autoprefixer({
        //     cascade: false
        // }))
        .pipe(gulp.dest('./css'))
        .pipe(browserSync.stream());
}

function watch() {
    browserSync.init({
        server: {
            baseDir: './'
        }
    })
    gulp.watch('./scss_mob/**/*.scss', style);
    // gulp.watch('./scss/**/style.scss', style);
    gulp.watch('./*.html').on('change', browserSync.reload);
}

exports.style = style;
exports.watch = watch;


