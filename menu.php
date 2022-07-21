<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>

<body>
    <nav class="navbar navbar-expand-md mb-4">
        <div class="container-fluid p-0">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-1 me-auto mb-2 mb-md-0 mt-2">
                    <li class="nav-item px-2">
                        <a class="nav-link me-2 ms-0 py-1 float-start <?php echo ($pg == "inicio") ? "active" : ""; ?>" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-4 py-1 float-start <?php echo ($pg == "sobre-mi") ? "active" : ""; ?>" href="sobre-mi.php">Sobre mí</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-4 py-1 float-start <?php echo ($pg == "proyectos") ? "active" : ""; ?>" href="proyectos.php">Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-4 py-1 float-start <?php echo ($pg == "contacto") ? "active" : ""; ?>" href="contacto.php">Contacto</a>
                    </li>
                </ul>
                <div class="d-inline mt-sm-0 mt-4">
                    <a href="" class="btn btn-rojo">Descargar mi CV <i class="fas fa-download"></i></a>
                </div>
            </div>
        </div>
    </nav>
</body>

</html>