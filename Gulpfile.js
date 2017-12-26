var gulp = require('gulp');
var sass = require('gulp-sass');
var watchSass = require("gulp-watch-sass")

gulp.task('styles', function() {
    gulp.src('sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css/'));
});


gulp.task('default',function() {
    gulp.watch('sass/**/*.scss',['styles']);
});

gulp.task("sass:watch", () => watchSass([
    "sass/**/*.scss"
  ])
    .pipe(sass())
    .pipe(gulp.dest("./css/")));