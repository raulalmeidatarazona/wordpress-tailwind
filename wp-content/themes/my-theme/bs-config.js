
module.exports = {
    // IMPORTANTE: Cambia esta URL por la dirección local de tu WordPress.
    // Puedes encontrar el puerto en tu archivo docker-compose.yml.
    proxy: "http://localhost:8000",

    // Archivos a observar para recargar.
    files: [
        './assets/css/style.css', // El CSS compilado por Tailwind
        './**/*.php',             // Todos los archivos PHP del tema
        './assets/js/**/*.js'     // Todos los archivos JS
    ],

    // Opciones adicionales
    notify: false, // Desactiva la pequeña notificación de BrowserSync en el navegador
    reloadDelay: 500, // Un pequeño retraso para asegurar que los archivos se compilen antes de recargar
    open: true, // Abre automáticamente el navegador
    browser: "default"
};
