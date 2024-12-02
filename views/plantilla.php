<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Alexis &amp; Valeria | ¡Nos casamos! Y te invitamos a celebrar nuestro día!!!</title>
        <meta name="theme-color" content="#f5365c"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="views/fonts/favicon-32x32.png" sizes="32x32" type="image/png">
        <link rel="icon" href="views/fonts/favicon-16x16.png" sizes="16x16" type="image/png">
        <meta content="nuesta boda, boda" name="keywords"/>
        <meta content="¡Nos complace invitarlos a nuestra boda! 🥂✨ ¡Esperamos verlos! " name="description"/>
        <meta content="index, follow" name="robots"/>
        
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Libre+Caslon+Text:400,400i,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="views/css/animate.css">     
        <link rel="stylesheet" href="views/css/owl.carousel.min.css">
        <link rel="stylesheet" href="views/css/magnific-popup.css">
        
        <link rel="stylesheet" href="views/css/aos.css">
        <link rel="stylesheet" href="views/css/flaticon.css">
        <link rel="stylesheet" href="views/css/style.css" type="text/css"/>
    </head>
    <body>
<?php
include 'modulos/slider.php';
// include 'modulos/historia.php';
include 'modulos/invitacion.php';
include 'modulos/evento.php';
include 'modulos/itinerario.php';
include 'modulos/mesa.php';
include 'modulos/confirmacion.php';
?>
        <div class="color-switcher-wrap">
            <div class="color-switcher-item">
                <div id="boton1" onclick="play()" class="color-toggle-btn button">
                    <span class="music material-symbols-outlined">graphic_eq</span>
                </div> 
                <div id="boton2" onclick="pause()" class="color-toggle-btn button">
                    <span class="music material-symbols-outlined">pause</span>
                </div>
            </div>
        </div>

        <audio id="music" autoplay>
            <source src="views/img/fondo.mp4" type="audio/mpeg">
        </audio>

        <script src="views/js/jquery.min.js"></script>
        <script src="views/js/jquery-migrate-3.0.1.min.js"></script>
        <script src="views/js/popper.min.js"></script>
        <script src="views/js/bootstrap.min.js"></script>
        <script src="views/js/jquery.waypoints.min.js"></script>
        <script src="views/js/jquery.stellar.min.js"></script>
        <script src="views/js/owl.carousel.min.js"></script>
        <script src="views/js/jquery.magnific-popup.min.js"></script>
        <script src="views/js/aos.js"></script>
        <script src="views/js/jquery.mb.YTPlayer.min.js"></script>
        <script src="views/js/scrollax.min.js"></script>
        <script src="views/js/main.js"></script>
        <script>
            $("#boton1").hide();

            var myMusic= document.getElementById("music");
            function play() {
                myMusic.play();
                $("#boton1").hide();
                $("#boton2").show();
            }

            function pause() {
                myMusic.pause();
                $("#boton2").hide();
                $("#boton1").show();
            }


            // var audioCtx = new (window.AudioContext || window.webkitAudioContext)();
            // var audioBuffer, fuenteDeReproduccion;
            // var start = false;
            // var stop = true;         
            
            // function solicitarAudio(url) {
            //     var request = new XMLHttpRequest();
            //     request.open("GET",url,true);
            //     request.responseType = "arraybuffer";
            //     request.onload = function() {
            //         audioCtx.decodeAudioData(request.response, function(buffer) {
            //         audioBuffer = buffer;
            //         });
            //     };
            //     request.send();
            // }

            // function reproducirAudio() {
            //     fuenteDeReproduccion = audioCtx.createBufferSource();
            //     fuenteDeReproduccion.buffer = audioBuffer;
            //     fuenteDeReproduccion.connect(audioCtx.destination);
            //     fuenteDeReproduccion.start(audioCtx.currentTime);
            // }

            // function detenerAudio() {
            //     fuenteDeReproduccion.stop();
            // }

            // function audio(){
            //     if (stop) {// si el audio está parado
            //         start = true;
            //         stop = false;
            //         boton.innerHTML = '<span class="music material-symbols-outlined">pause</span>';//detener
            //         reproducirAudio();
            //     }else{// de lo contrario
            //         stop = true;
            //         start = false;
            //         boton.innerHTML = '<span class="music material-symbols-outlined">graphic_eq</span>';//reproducir
            //         detenerAudio()
            //     }
            // }

            // solicitarAudio(
            // "views/img/fondo.mp4"
            // );

            // // Utiliza el evento click para iniciar o detener la reproducción
            // boton.addEventListener("click", audio, false);
        </script>
    </body>
</html>
