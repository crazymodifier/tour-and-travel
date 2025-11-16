const gulp = require("gulp");
const sass = require('gulp-sass')(require('sass'));
const rename = require("gulp-rename");
const cleanCSS = require("gulp-clean-css");
const uglify = require("gulp-uglify");
const sourcemaps = require('gulp-sourcemaps');
// CSS task
function css() {
  return gulp
    .src("./scss/**/*.scss")
    // .pipe(plumber())
    // .pipe(sourcemaps.init())
    .pipe(sass({
      outputStyle: "expanded",
      includePaths: "./node_modules",
    }))
    .on("error", sass.logError)
    // .pipe(autoprefixer({
    //   cascade: false
    // }))
    // .pipe(cleanCSS())
    .pipe(rename({
      suffix: ".min"
    }))
    // .pipe(sourcemaps.write('./maps'))
    .pipe(gulp.dest("../assets/css"))
    // .pipe(gulp.dest("../assets/css"));
}

function js() {
  return gulp
    .src("./js/**/*.js")
    // .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(uglify())
    .pipe(rename({
      suffix: ".min"
    }))
    .pipe(sourcemaps.write('./maps'))
    .pipe(gulp.dest("../assets/js"));
}

function watchFiles() {
  gulp.watch("./scss/**/*", css);
  gulp.watch("./js/**/*", js);
}

// Define complex tasks
const build = gulp.series(css,js);
const watch = gulp.series(build, gulp.parallel(watchFiles));
exports.default = watch;