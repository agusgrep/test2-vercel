window.addEventListener('load', function() {
    var confetiContainer = document.createElement('div');
    confetiContainer.classList.add('confeti-container');
    document.body.appendChild(confetiContainer);

    for (var i = 0; i < 100; i++) {
        var confeti = document.createElement('div');
        confeti.classList.add('confeti');
        confeti.style.left = Math.random() * (document.documentElement.clientWidth - 10) + 'px'; // Restamos el ancho del confeti
        confeti.style.animationDelay = Math.random() * 2 + 's';
        confeti.style.backgroundColor = getRandomColor();
        confetiContainer.appendChild(confeti);

        // Adjuntar event listener para el evento de finalización de la animación
        confeti.addEventListener('animationend', function() {
            this.remove(); // Elimina el confeti del DOM
        });
    }
});

function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}
