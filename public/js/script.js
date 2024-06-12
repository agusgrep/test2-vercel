const days = document.getElementById("days"),
        hours = document.getElementById("hours"),
        min = document.getElementById("min"),
        sec = document.getElementById("sec");

const fecha = new Date('Junio 14, 2024 19:00:00').getTime();

setInterval(() =>{
    let hoy = new Date().getTime();

let tiempoRest = fecha - hoy;

//Conversion
let dias = Math.floor(tiempoRest/86400000),
    horas = Math.floor(tiempoRest/3600000) % 24,
    minutos = Math.floor(tiempoRest/60000) % 60,
    segundos = Math.floor(tiempoRest/1000) % 60;

    days.innerHTML = dias; 
    hours.innerHTML = horas;
    min.innerHTML = minutos;
    sec.innerHTML = segundos;

    if (horas < 10) hours.innerHTML = "0" +horas;
    if (minutos < 10) min.innerHTML = "0" +minutos;
    if (segundos < 10) sec.innerHTML = "0" +segundos;
}, 1000);

document.getElementById("mostrarMapa").addEventListener("click", function() {
    var mapa = document.getElementById("mapContainer");
    if (mapa.style.display === "none" || mapa.style.display === "") {
        mapa.style.display = "block";
        this.innerText = "Ocultar el mapa";
    } else {
        mapa.style.display = "none";
        this.innerText = "Mostrar el mapa";
    }
});



const toggleButton = document.getElementById('toggleDressCode');
const dressCodeContainer = document.querySelector('.dress-code-container');

toggleButton.addEventListener('click', function() {
    if (dressCodeContainer.style.display === 'none' || dressCodeContainer.style.display === '') {
        dressCodeContainer.style.display = 'block';
        this.innerText = "Ocultar Dress Code";
    } else {
        dressCodeContainer.style.display = 'none';
        this.innerText = "Mostrar Dress Code";
    }
});





