import path from 'path';
import { fileURLToPath } from 'url';
import dotenv from 'dotenv';
import gulp from 'gulp';
import gulpsass from 'gulp-sass';
import * as sasslib from 'sass';
import autoprefixer from 'gulp-autoprefixer';
import browserSynclib from 'browser-sync';

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

const browserSync = browserSynclib.create();
const sass = gulpsass(sasslib);

// Certifique-se de que o caminho para o arquivo .env.development está correto
dotenv.config({
  path: path.resolve(__dirname, '.env.development')
});

function compilaSass() {
  return gulp
    .src('assets/css/**/*.scss')
    .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
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
    .watch('assets/css/**/*.scss', gulp.parallel('sass'))
    .on('change', browserSync.reload);
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
