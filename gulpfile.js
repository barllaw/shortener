let source  = '_source';

    path = {
      build:{
        css:  'public/css/'
      },
      src:{
        css:  'sass/main.sass'
      }
    }


let {src, dest}   = require('gulp'),
    gulp          = require('gulp'),
    del           = require('del');
    sass          = require('gulp-sass');
    autoprefixer  = require('gulp-autoprefixer');
    clean_css     = require('gulp-clean-css');
    rename        = require('gulp-rename');

function css() {
  return src(path.src.css)
    .pipe(sass())
    .pipe( autoprefixer({ overrideBrowserslist: ['last 5 versions'],  cascade:true }))
    // .pipe(dest(path.build.css))
    .pipe(clean_css())
    .pipe(rename({extname: '.min.css'}))
    .pipe(dest(path.build.css))
}

function clean() {
  return del(path.build.css);
}

function watchFiles(params) {
  gulp.watch(['sass/**/*.sass'], css);

}

let build = gulp.series(clean, css);
let watch = gulp.parallel(build, watchFiles);
exports.css           = css;
exports.build         = build;
exports.default       = watch;