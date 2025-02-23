<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type = "text/css" href = "css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel = "icon" type = "png/ico" href = "imagenes/iconos/icono.ico">
    <script src="https://kit.fontawesome.com/d31c39d666.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
    <title>Mis 15 años - Maria Paula</title>
</head>
<body>
    <header id = "cabecera">
        <div class = "gaston">
            <div class = "contenedor-nombres">
                <h1>Mis 15 <br>Maria Paula</h1>
            </div>
        </div>
        <div class = "natalia">
            <div class = "contenedor-mensaje">
                <h2>Te invito a celebrar mis 15</h2>
            </div>
            <div class = "fecha-boda">
                <div class = "contenedor-fecha">
                    <h3>Padres: <span>Gisela y Victor León<span> </h3>   
                    <h3>Padrinos: <span>Lorena y Carlos Panciroli<span></h3>
                </div>
            </div>
        </div>
        <audio src = "musica/cancion.mp3" autoplay></audio>
    </header>
    <main id = "contenido-principal">
        <section class = "temporizador">
            <div class>
                <h3>Solo falta...</h3>
            </div>
            <div class = "linea"></div>
            <div id = "tiempo">
            </div>
        </section>

        <section class = "slider-dos">
            <div>
                <h3>Bienvenido/a mi historia</h3>
            </div>
            <div class = "linea"></div>
            <div class="swiffy-slider">
                <ul class="slider-container">
                    <li id = "imagen-1"></li>
                    <li id = "imagen-2"></li>
                    <li id = "imagen-3"></li>
                    <li id = "imagen-4"></li>
                    <li id = "imagen-5"></li>
                    <li id = "imagen-6"></li>
                </ul>

                <button type="button" class="slider-nav"></button>
                <button type="button" class="slider-nav slider-nav-next"></button>

                <div class="slider-indicators">
                    <button class="active"></button>
                    <button></button>
                    <button></button>
                    <button></button>
                    <button></button>
                    <button></button>
                </div>
            </div>
        </section>

        <section class = "datos-boda">
            <div class = "contenedor-versiculo">
                <article class = "versiculo">
                    <h4>Lucas 1:45</h4>
                    <div class = "linea" style = "border: 1.8px solid white;"></div>
                    <p class = "parrafo-versiculo">
                        Dichosa tú que has creido, porque lo que te ha dicho el señor
                        se cumplirá.
                    </p>
                </article>
            </div>                

            <div class = "contenedor-datos">
                <article class = "ubicacion">
                    <i class="fa-solid fa-martini-glass-empty"></i>
                    <h4>Clahe Salón de eventos</h4>
                    <p>21:00hs</p>
                    <a href = "https://maps.app.goo.gl/YzHw8Fjmh9hnKerc7"><i class="fa-solid fa-location-dot"></i> Ver ubicación</a>
                </article>

                <article class = "codigo-vestimenta">
                    <i class="fa-brands fa-black-tie"></i>
                    <h4>Dress Code</h4>
                    <p>Elegante Sport</p>
                </article>
            </div>
        </section>

        <section class = "confirmacion">
            <div class = "contenedor-confirmacion">
                <div class = "titulo-asistencia">
                    <h2>Confirmar asistencia</h2>
                </div>
                <div class = "linea" style = "border: 1.8px solid white;"></div>
                <div class = "parrafo-confirmacion">
                    <p>
                        Celebrar mis 15 años es un sueño hecho realidad,
                        y para que sea perfecto, me encantaria contar
                        con tu presencia. <br>
                        <strong>¡Confirmar asistencia hasta el 15/03!</strong>
                    </p>
                </div>

                <div class = "botones-confirmacion">
                    <a href="https://api.whatsapp.com/send?phone=+541158034557&text=Hola Confirmo asistencia a los 15 de Maria Paula.">Estare encantado</a>
                    <a href="https://api.whatsapp.com/send?phone=+541158034557&text=Hola Siento informate que no podre asistir a los 15 de Maria Paula..">Lo siento, no puedo</a>
                </div>
            </div>
        </section>
    </main>
    <footer id = "pie">
        Desarrollado por Gastón Cano <?= DATE('Y')?>&copy;
        <script src = "javascript/jquery.min.js"></script>
        <script src = "javascript/countdown/jquery.countdown.js"></script>
        <script type="text/javascript">
            $('#tiempo').countdown('2025/03/29', function(event) 
            {
                $(this).html(event.strftime('<div><span>%D</span><span>Dias</span></div> <div><span>%H</span><span>Horas</span></div> <div><span>%M</span><span>Minutos</span></div> <div><span>%S</span><span>Segundos</span></div>'));
            });
        </script>
    </footer>
</body>
</html>