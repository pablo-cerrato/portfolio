<?php 
$pg = "proyectos";
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
    <title>Proyectos</title>
</head>

<body id="proyectos">
    <header class="container">
    <?php include_once ("menu.php"); ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 mb-5 mt-3">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6 mb-3">
                <p>Los siguientes son algunos de los trabajos que he realizado</p>
            </div>
        </div>
        <div class="row p-6">
            <div class="col-sm-4 col-12 p-sm-3 px-4 py-2">
                <div class="row-card">
                    <div class="col-12">
                        <img src="images/abmclientes.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 py-3 subt">
                        <h2>ABM CLIENTES</h2>
                    </div>
                    <div class="col-12 py-3">
                        <p>Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap
                            y Json.</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <a href="#" class="btn">Ver online</a>
                        </div>
                        <div class="col-6 pt-1">
                            <a class="codigo" href="#">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-12 p-sm-3 px-4 py-2">
                <div class="row-card">
                    <div class="col-12">
                        <img src="images/abmventas.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 py-3 subt">
                        <h2>ABM VENTAS</h2>
                    </div>
                    <div class="col-12 py-3">
                        <p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC,
                            Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                    </div>
                    <div class="row py-4">
                        <div class="col-6">
                            <a href="#" class="btn">Ver online</a>
                        </div>
                        <div class="col-6 pt-1">
                            <a class="codigo" href="#">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-12 p-sm-3 px-4 py-2">
                <div class="row-card">
                    <div class="col-12">
                        <img src="images/proyecto-integrador.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 py-3 subt">
                        <h2>PROYECTO INTEGRADOR</h2>
                    </div>
                    <div class="col-12 py-3">
                        <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS,
                            Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y
                            funcionalidades a fines.</p>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <a href="#" class="btn">Ver online</a>
                        </div>
                        <div class="col-6 pt-1">
                            <a class="codigo" href="#">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="container">
                <div class="row mt-5 pb-3">
                    <div class="col-12 col-sm-3 text-center text-sm-start">
                        <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                        <a href="https://www.linkedin.com/in/nelson-daniel-tarche/" target="_blank" title="Linkedin"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-12 col-sm-3 text-center text-sm-start pt-2 p-sm-0">
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
    </main>
</body>

</html>