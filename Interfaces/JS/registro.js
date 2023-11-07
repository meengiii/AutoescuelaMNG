document.addEventListener('DOMContentLoaded', function () {
    // Obtén una referencia al botón de registro
    var registroButton = document.getElementById('registro');

    // Agrega un controlador de eventos al botón de registro
    registroButton.addEventListener('click', function () {
        // Redirige a la página de registro cuando se hace clic en el botón
        window.location.href = 'http://virtual.localmengi.com/autoescuelaMNG/interfaces/registro.html';
    });
});

