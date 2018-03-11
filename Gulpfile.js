var gulp = require('gulp');
var sass = require('gulp-sass');
var watchSass = require("gulp-watch-sass")

gulp.task('styles', function() {
    gulp.src('sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./public/css/'));
});


gulp.task('default',function() {
    gulp.watch('sass/**/*.scss',['styles']);
});

gulp.task("watch", () => watchSass([
    "sass/**/*.scss"
  ])
    .pipe(sass())
    .pipe(gulp.dest("./css/")));