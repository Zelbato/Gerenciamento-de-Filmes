const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const cleanCSS = require('gulp-clean-css');

// Caminho dos arquivos Sass
const paths = {
    scss: './public/assets/scss/**/*.scss', // Todos os arquivos .scss dentro da pasta e subpastas
    cssDest: './public/assets/css',        // Destino para os arquivos CSS gerados
};

// Tarefa para compilar Sass
gulp.task('sass', function () {
    return gulp.src(paths.scss)           // Lê os arquivos Sass
        .pipe(sass().on('error', sass.logError)) // Compila para CSS e exibe erros, se existirem
        .pipe(cleanCSS())                 // Minifica o CSS
        .pipe(gulp.dest(paths.cssDest));  // Salva os arquivos CSS no destino
});

// Tarefa padrão
gulp.task('default', gulp.series('sass'));
