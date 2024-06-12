<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <script src="{{ asset('js/confeti.js') }}"></script>
    <div class="container">
        <div class="frase-inicial">
            <p>¡Una Celebración Inolvidable!</p>
            <p>En honor a</p>
        </div>
        <div class="nombre">
            <h1>Julieta Uribe</h1>
        </div>
        <div class="fecha">
            <p>Jueves · 13 de Junio</p>
        </div>
        <div class="location">
            <span>Lugar: </span>
            <button id="mostrarMapa" class="boton-mapa">Mostrar el mapa</button>
            <div id="mapContainer" style="display: none;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1935.041082079934!2d-75.73348832500962!3d-14.072325287350912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9110e3cba5c9be2d%3A0x77ac6b774750a322!2sFederaci%C3%B3n%20de%20Mujeres%20de%20Ica!5e0!3m2!1ses!2spe!4v1717618134660!5m2!1ses!2spe" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <p><span>Dirección:</span> Calle Capulies L-28, Urbanización San Isidro, cercado de Ica, Ica 11000</p>
        </div>    
        <hr>
            
        <div class="countdown">
            <div>
                <p id="days">09</p>
                <span class="countdown-text">días</span>
            </div>
            <div>
                <p id="hours">23</p>
                <span class="countdown-text">horas</span>
            </div>
            <div>
                <p id="min">50</p>
                <span class="countdown-text">minutos</span>
            </div>
            <div>
                <p id="sec">50</p>
                <span class="countdown-text">segundos</span>
            </div>
        </div>
        <button id="toggleDressCode">Mostrar Dress Code</button>

        <div class="dress-code-container">
            <div class="dress-code-titles">DRESS CODE: ELEGANTE</div>
            <div class="dress-code-table">
                <table>
                    <thead>
                        <tr>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="{{ asset('images/chaqueta-de-sport.png') }}" alt="vestimenta" class="img-dresscode"></td>
                            <td><img src="{{ asset('images/vestido.png') }}" alt="vestimenta" class="img-dresscode">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="dress-code-subtitle">No permitido:</div>
            <div class="img-bandresscode">
                <img src="<?php echo asset('images/sombrero.png'); ?>" alt="bannedclothe" class="img-bandresscode">
                <img src="<?php echo asset('images/zapatos.png'); ?>" alt="bannedclothe" class="img-bandresscode">
                <img src="<?php echo asset('images/shorts.png'); ?>" alt="bannedclothe" class="img-bandresscode">

            </div>
        </div>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html> 
</body>
</html>