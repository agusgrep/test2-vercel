const mix = require('laravel-mix');

// Compilar archivo CSS
mix.styles([
    'resources/css/app.css', // Archivo CSS de entrada
], 'public/css/styles.css'); // Ruta de salida para el archivo compilado

// Compilar archivos JavaScript
mix.js([
    'resources/js/app.js', // Archivo JavaScript de entrada
    'resources/js/bootstrap.js', // Otro archivo JavaScript de entrada
], 'public/js/script.js'); // Ruta de salida para el archivo JavaScript compilado

// Copiar archivos de imágenes
mix.copyDirectory('resources/images', 'public/images');

// Copiar archivo JavaScript
mix.copy('resources/js/confeti.js', 'public/js/confeti.js');
