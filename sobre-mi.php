<?php 
$pg = "sobre-mi";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="css/font-awesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilo.css">
    <title>Sobre-mí</title>
</head>

<body id="sobre-mi">
    <header class="container">
    <?php include_once ("menu.php"); ?>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-5 mt-4">
                    <h1 class="mt-sm-4 pb-sm-4">Sobre mí</h1>
                    <p class="pb-sm-5">
                        Soy docente de música. Doy clases de piano en institutos y de forma particular.</p>
                    <a href="contacto.php" class="btn btn-rojo">Enviar mensaje</a>
                </div>
                <div class="col-12 col-sm-3 offset-sm-2 mt-5">
                    <img class="img-fluid img-circle gato" src="images/gato-gris.jpeg" alt="">
                </div>
            </div>
        </div>
        <div id="tecnologias" class="container-fluid mt-sm-5 pb-sm-4">
            <section class="container">
                <div class="row">
                    <div class="col-12 py-4">
                        <h2 class="mt-4">Stack tecnológico</h2>
                    </div>
                    <div class="col-sm-2 col-6 text-center p-0">
                        <div class="col-4 px-4 py-5 col-sm-2 text-center card">
                            <h3>Javascript</h3>
                            <img src="images/javascript.jpeg" class="img-fluid m-auto" alt="">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center p-0">
                        <div class="col-4 px-4 py-5 col-sm-2 text-center card">
                            <h3>PHP</h3>
                            <img src="images/php.jpg" class="img-fluid m-auto" alt="">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center p-0">
                        <div class="col-4 px-4 py-5 col-sm-2 text-center card">
                            <h3>HTML5</h3>
                            <img src="images/html5.png" class="img-fluid m-auto" alt="">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center p-0">
                        <div class="col-4 px-4 py-5 col-sm-2 text-center card">
                            <h3>React.js</h3>
                            <img src="images/react.png" class="img-fluid m-auto" alt="">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center p-0">
                        <div class="col-4 px-4 py-5 col-sm-2 text-center card">
                            <h3>jQuery</h3>
                            <img src="images/jquery.jpg" class="img-fluid m-auto" alt="">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center p-0">
                        <div class="col-4 px-4 py-5 col-sm-2 text-center card">
                            <h3>Bootstrap</h3>
                            <img src="images/bootstrap.png" class="img-fluid m-auto" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-6 text-center p-0">
                        <div class="col-4 px-4 py-5 col-sm-2 text-center card">
                            <h3>Laravel</h3>
                            <img src="images/laravel.png" class="img-fluid m-auto" alt="">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center p-0">
                        <div class="col-4 px-4 py-5 col-sm-2 text-center card">
                            <h3>MySQL</h3>
                            <img src="images/mysql.png" class="img-fluid m-auto" alt="">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center p-0">
                        <div class="col-4 px-4 py-5 col-sm-2 text-center card">
                            <h3>CSS</h3>
                            <img src="images/css.png" class="img-fluid m-auto" alt="">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center p-0">
                        <div class="col-4 px-4 py-5 col-sm-2 text-center card">
                            <h3>Git</h3>
                            <img src="images/git.png" class="img-fluid m-auto" alt="">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center p-0">
                        <div class="col-4 px-4 py-5 col-sm-2 text-center card">
                            <h3>Apache</h3>
                            <img src="images/apache.png" class="img-fluid m-auto" alt="">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center p-0">
                        <div class="col-4 px-4 py-5 col-sm-2 text-center card">
                            <h3>Mercadopago</h3>
                            <img src="images/mercadopago.jpg" class="img-fluid m-auto" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 py-4">
                        <h2 class="mt-2">Programas de sonido y escritura musical</h2>
                    </div>
                    <div class="col-sm-2 col-6 text-center p-0">
                        <div class="col-4 px-4 py-5 col-sm-2 text-center card">
                            <h3>Musescore</h3>
                            <img src="images/musescore.png" class="img-fluid m-auto" alt="programa musescore">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center p-0">
                        <div class="col-4 px-4 py-5 col-sm-2 text-center card">
                            <h3>Reaper</h3>
                            <img src="images/reaper.jpg" class="img-fluid m-auto" alt="programa reaper">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center p-0">
                        <div class="col-4 px-4 py-5 col-sm-2 text-center card">
                            <h3>Ableton live</h3>
                            <img src="images/ableton.png" class="img-fluid m-auto" alt="programa ableton live">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center p-0">
                        <div class="col-4 px-4 py-5 col-sm-2 text-center card">
                            <h3>Kontakt</h3>
                            <img src="images/kontakt.png" class="img-fluid m-auto" alt="programa kontakt">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center p-0">
                        <div class="col-4 px-4 py-5 col-sm-2 text-center card">
                            <h3>Native instruments</h3>
                            <img src="images/native-instruments.png" class="img-fluid m-auto" alt="native-instruments">
                        </div>
                    </div>
            </section>
        </div>
        <div id="experiencias" class="container-fluid mt-sm-4 mb-sm-3">
            <section class="container">
                <div class="row">
                    <div class="col-12">
                        <h2><i class="fa-solid fa-briefcase"></i>Experiencia laboral</h2>
                    </div>
                </div>
                <div class="row bg-white shadow">
                    <div class="col-12">
                        <div class="row" id="experiencia">
                            <div class="col-2 my-auto d-sm-block">
                                <img src="images/sin-logo.png" alt="">
                            </div>
                            <div class="col-12 col-sm-10">
                                <h3>Profesor en municipalidad de Berazategui</h3>
                                <h4>Profesor en talleres de piano</h4>
                                <h5>abr 2022 - presente</h5>
                                <p>Dictado de clases en talleres de piano de la municipalidad de Berazategui.</p>
                            </div>
                        </div>
                        <div class="row" id="experiencia">
                            <div class="col-2 my-auto d-sm-block">
                                <img src="images/sin-logo.png" alt="">
                            </div>
                            <div class="col-12 col-sm-10">
                                <h3>Profesor de música en Instituto Enrico Fermi</h3>
                                <h4>Profesor de música</h4>
                                <h5>abr 2019 - presente</h5>
                                <p>Dictado de clases de música en nivel primario</p>
                            </div>
                        </div>
                        <div class="row" id="experiencia">
                            <div class="col-2 my-auto d-sm-block">
                                <img src="images/sin-logo.png" alt="">
                            </div>
                            <div class="col-12 col-sm-10">
                                <h3>Profesor de música en escuela n°36</h3>
                                <h4>Profesor de música</h4>
                                <h5>nov 2021 - presente</h5>
                                <p>Profesor suplente de música en nivel primario.</p>
                            </div>
                        </div>
                        <div class="row" id="experiencia">
                            <div class="col-2 my-auto d-sm-block">
                                <img src="images/sin-logo.png" alt="">
                            </div>
                            <div class="col-12 col-sm-10">
                                <h3>Profesor de música en escuela "Corbeta Uruguay"</h3>
                                <h4>Profesor de música</h4>
                                <h5>abr 2018 - abr 2019</h5>
                                <p>Dictado de clases de música como profesor suplente en nivel primario</p>
                            </div>
                        </div>
                        <div class="row" id="experiencia">
                            <div class="col-2 my-auto d-sm-block">
                                <img src="images/sin-logo.png" alt="">
                            </div>
                            <div class="col-12 col-sm-10">
                                <h3>Profesor de piano</h3>
                                <h4>Dictado de clases particulares</h4>
                                <h5>2016 - presente</h5>
                                <p>Dictado de clases de piano.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section id="formacion" class="container">
            <div class="row">
                <div class="col-12 my-3">
                    <h2><i class="fa-solid fa-graduation-cap"></i>Formación académica</h2>
                </div>
            </div>
            <div class="row bg-white rounded p-3 shadow">
                <div class="col-12 col-sm-1 my-auto">
                    <img src="images/sin-logo.png" alt="">
                </div>
                <div class="col-12 col-sm-5">
                    <h3>Profesor de música orientación instrumento (piano)</h3>
                    <h4>Escuela municipal de Bellas Artes Carlos Morel</h4>
                    <h5>2010 - 2019</h5>
                    <p>http://embacarlosmorel.edu.ar/morel/</p>
                </div>
                <div class="col-12 col-sm-1 my-auto">
                    <img src="images/sin-logo.png" alt="">
                </div>
                <div class="col-12 col-sm-5">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint accusamus in fugiat architecto
                        maxime voluptates, unde maiores praesentium esse consequatur, id, magni quidem nemo! Non
                        laudantium maxime soluta expedita ex?</p>
                </div>
        </section>
        </div>
        <section id="cursos" class="container">
            <div class="row">
                <div class="col-12 my-4">
                    <h2><i class="fa-solid fa-graduation-cap"></i>Cursos de desarrollo profesional</h2>
                </div>
            </div>
            <div class="row bg-white rounded shadow mb-sm-5 p-3">
                <div class="col-12 col-sm-1 mt-3">
                    <img src="images/sin-logo.png" alt="">
                </div>
                <div class="col-12 col-sm-5">
                    <h3>Curso de ingles</h3>
                    <h4>Instituto Queenlands</h4>
                    <h5>2004 - 2010</h5>
                    <p>Lorem ipsum, dolor sit amet consectetur ad</p>
                </div>
                <div class="col-12 col-sm-1 mt-3">
                    <img src="images/sin-logo.png" alt="">
                </div>
                <div class="col-12 col-sm-5 mb-4">
                    <h3>Estudiante en clases particulares de piano</h3>
                    <h4>Profesor Pablo De Paoli</h4>
                    <h5>2012 - presente</h5>
                    <p>Lorem ipsum, dolor sit amet consectetur ad</p>
                </div>
            </div>
        </section>
        <section id="idiomas">
            <div class="container">
                <div class="row py-5 me-sm-1">
                    <div class="col-12 col-sm-6 pb-sm-0 pb-0 mb-3">
                        <div class="row card-idioma bg-white shadow me-2">
                            <div class="col-4 col-sm-4 text-center card comentario">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                            <div class="col-6 col-sm-8 p-sm-5 p-4">
                                <h2>IDIOMAS</h2>
                                <ul>
                                    <li>ESPANOL - Nativo</li>
                                    <li>INGLES - Intermediate</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 pb-sm-0 pb-0 mt-0 container">
                        <div class="row card-idioma bg-white shadow ms-sm-1 me-2">
                            <div class="col-sm-4 col-4 text-center card comentario">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="col-6 col-sm-8 p-sm-5 p-4">
                                <h2>HOBBIES</h2>
                                <li>Piano</li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>
    <footer class="container">
        <div class="row mt-5 pb-3">
            <div class="col-12 col-sm-3 text-center text-sm-start">
                <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/nelson-daniel-tarche/" target="_blank" title="Linkedin"><i
                        class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-12 col-sm-3 text-center text-sm-start pt-2 p-sm-0 depcsuite">
                Sponsor <a href="https://depcsuite.com" target="_blank" title="DEPCSUITE">DePC Suite</a>
            </div>
            <div class="col-12 col-sm-3 text-sm-start  pt-2 p-sm-0">
                <a href="mailto:pabloccerrato@gmail.com">pabloccerrato@gmail.com</a>
            </div>
        </div>
        <div class="whatsapp">
            <a href="https://api.whatsapp.com/send?phone=541151493687" title="Whatsapp"><i
                    class="fab fa-whatsapp"></i></a>
        </div>
    </footer>
</body>

</html>