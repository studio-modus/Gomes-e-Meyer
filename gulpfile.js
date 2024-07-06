import path from 'path';
import dotenv from 'dotenv';
import gulp from 'gulp';
import gulpsass from 'gulp-sass';
import * as sasslib from 'sass';
import autoprefixer from 'gulp-autoprefixer';
import browserSynclib from 'browser-sync';


const browserSync = browserSynclib.create();
const sass = gulpsass(sasslib);

dotenv.config({
  path: '.env.development'
});

const __dirname = import.meta.dirname;

function compilaSass() {
  return gulp
    .src('assets/css/**/*.scss')
    .pipe(sass({ outputStyle: 'compressed' }))
    .pipe(
      autoprefixer({
        cascade: false,
      })
    )
    .pipe(gulp.dest(path.join(__dirname, 'assets', 'css')))
    .pipe(browserSync.stream());
}

gulp.task('sass', compilaSass);

function browser() {
  const { URL_LOCAL } = process.env;
  if (URL_LOCAL) {
    browserSync.init({
      proxy: URL_LOCAL,
      open: false,
    });
  } else {
    console.log('Você não forneceu a "URL_LOCAL", browser-sync não será iniciado!');
  }
}

gulp.task('browser-sync', browser);

function watch() {
  compilaSass();
  gulp
    .watch('assets/css/**/*.scss')
    .on('change', gulp.parallel('sass'));
  gulp
    .watch(['**/*.php', '*.html', '**/*.js', 'assets/css/*.css'])
    .on('change', browserSync.reload);
}

gulp.task('watch', watch);

gulp.task('default', gulp.parallel('watch', 'browser-sync'));

process.on('exit', function () {
  gulp.removeAllListeners();
  browserSync.exit();
});
