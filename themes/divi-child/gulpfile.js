const browserSync = require('browser-sync').create();
const gulp = require('gulp');
const uglify = require('gulp-uglify');
const pump = require('pump');
const sass = require('gulp-sass');
const imagemin = require('gulp-imagemin');
const concat = require('gulp-concat');

gulp.task('serve', (bs) => {
    browserSync.init({
        proxy: "http://palisadetechnologies.com",
    });
    gulp.watch('src/**/*', gulp.series(['scripts', 'sass', 'imageMin']));
    gulp.watch('src/**/*.*').on('change', browserSync.reload);
    bs();
});

// gulp.task('copyHtml', (copy) => {
//     pump([
//         gulp.src('src/*.html'),
//         gulp.dest('dist')
//     ], copy)
// });

gulp.task('scripts', (cb) => {
  pump([
        gulp.src('./src/js/*.js'),
        concat('index.js'),
        uglify(),
        gulp.dest('./dist/js')
    ], cb)
});

gulp.task('sass', (style) => {
    pump([
        gulp.src('./src/sass/*.scss'),
        sass().on('error', sass.logError),
        gulp.dest('./dist/css')
    ], style)
});

gulp.task('imageMin', (img) =>
    pump([
        gulp.src('src/images/*'),
        imagemin(),
        gulp.dest('dist/images')
    ], img)
);

gulp.task('default', gulp.series(['scripts', 'sass', 'imageMin'], done => done()));