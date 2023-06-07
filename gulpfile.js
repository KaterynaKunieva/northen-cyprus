const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const autoprefixer = require("gulp-autoprefixer");
const cleanCSS = require("gulp-clean-css");
const rename = require("gulp-rename");
const browserSync = require("browser-sync").create();
const concat = require("gulp-concat");
const inject = require("gulp-inject");
const uglify = require("gulp-uglify");

gulp.task("styles", function () {
  return gulp
    .src("sass/main.sass")
    .pipe(
      sass({
        includePaths: require("node-bourbon").includePaths,
      }).on("error", sass.logError)
    )
    .pipe(rename({ suffix: ".min", prefix: "" }))
    .pipe(
      autoprefixer({
        overrideBrowserslist: ["last 15 versions"],
        cascade: false,
      })
    )
    .pipe(cleanCSS())
    .pipe(gulp.dest("css"))
    .pipe(browserSync.stream());
});

gulp.task("styles3", function () {
  return gulp
    .src("sass/header.sass")
    .pipe(
      sass({
        includePaths: require("node-bourbon").includePaths,
      }).on("error", sass.logError)
    )
    .pipe(rename({ suffix: ".min", prefix: "" }))
    .pipe(
      autoprefixer({
        overrideBrowserslist: ["last 15 versions"],
        cascade: false,
      })
    )
    .pipe(cleanCSS())
    .pipe(gulp.dest("css"))
    .pipe(browserSync.stream());
});

gulp.task("inject", function () {
  return gulp
    .src("./header.php")
    .pipe(
      inject(gulp.src(["./css/header.min.css"]), {
        name: "head",
        transform: function (filePath, file) {
          $result = "<style>";
          $result = $result + file.contents.toString("utf8");
          $result = $result + "</style>";
          return $result;
        },
      })
    )
    .pipe(gulp.dest("./"));
});

gulp.task("common", function () {
  return gulp
    .src(["./js/common.js"])
    .pipe(concat("common.min.js"))
    .pipe(uglify()) // Minify common.js
    .pipe(gulp.dest("./js/"));
});

gulp.task(
  "browser-sync",
  gulp.series("styles", "styles3", "inject", "common"),
  function () {
    browserSync.init({
      watch: true,
      server: {
        baseDir: "./",
      },
      port: 3000,
    });
  }
);

gulp.task("watch", function () {
  gulp.watch("sass/main.sass", gulp.series("styles"));
  gulp.watch("sass/_media.sass", gulp.series("styles"));
  gulp.watch("sass/header.sass", gulp.series("styles3"));
  gulp.watch("css/header.min.css", gulp.series("inject"));
  gulp.watch("js/common.js", gulp.series("common"));
  gulp.watch("js/*.js").on("change", browserSync.reload);
  gulp.watch("*.php").on("change", browserSync.reload);
});

gulp.task("default", gulp.series("browser-sync", "watch"));
