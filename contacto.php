<?php 
$pg = "contacto"
?>

<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="css/font-awesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilo.css">
    <title>Contacto</title>
</head>
<body id="contacto" class="d-flex flex-column h-100">
    <header class="container">
    <?php include_once ("menu.php"); ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <p>Te invito a que te conectes enviándome un mensaje o bien por whatsapp</p>
            </div>
            <div class="col-6">
                <form action="" method="post">
                    <div class="pb-3">
                        <input class="form-control"  type="text" name="txtNombre" id="txtNombre" placeholder="Nombre">
                    </div>
                    <div class="pb-3">
                        <input class="form-control" type="mail" name="mail" id="mail" placeholder="Correo">
                    </div>
                    <div class="pb-3">
                        <input class="form-control" type="tel" name="tel" id="tel" placeholder="Teléfono/Whatsapp">
                    </div>
                    <div class="pb-3">
                        <textarea class="form-control" name="txtMensaje" id="txtMensaje" cols="30" rows="6" placeholder="Escribe aquí tu mensaje"></textarea>
                    </div>
                    <div class="">
                        <button class="btn" type="submit" name="btnEnviar" id="btnEnviar">ENVIAR</button>
                    </div>
                </form>
        </div>
    </main>
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
            <a href="https://api.whatsapp.com/send?phone=541151493687" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
        </div>
    </footer>
</body>
</html>