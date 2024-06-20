<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../../css/citas_navbar.css" />
    <title>Formulario de Cita - Empresa de Arquitectos</title>
</head>

<body>
    <!-- NavBar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img class="h-5" src="../../imagenes/logodomos.jpg" width="140px" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../../index.php">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Servicios
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item"
                                    href="../../vistas/sesion_cerrada/diseño_planos_navbar.php">Diseño de planos</a>
                            </li>
                            <li>
                                <a class="dropdown-item"
                                    href="../../vistas/sesion_cerrada/remodelacion_navbar.php">Remodelacion de
                                    interiores</a>
                            </li>
                            <li>
                                <a class="dropdown-item"
                                    href="../../vistas/sesion_cerrada/diseño_edificios_navbar.php">Diseño de edificios
                                    multifamiliares</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Estudio
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item"
                                    href="../../vistas/sesion_cerrada/nosotros_navbar.php">Nosotros</a></li>
                            <li><a class="dropdown-item"
                                    href="../../vistas/sesion_cerrada/nuestro_equipo_navbar.php">Nuestro equipo</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../vistas/sesion_cerrada/proyectos_navbar.php">Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../vistas/sesion_cerrada/citas_navbar.php">Citas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../vistas/login_register/login.php">Iniciar sesion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /NavBar-->
    <div class="form-container">
        <h2>Solicitar Cita</h2>
        <form action="/submit_appointment" method="post">
            <div class="form-group">
                <label for="text">Nombre Completo:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="text">Correo Electrónico:</label>
                <input type="text" id="correo" name="correo" required>
            </div>
            <div class="form-group">
                <label for="text">Número de Teléfono:</label>
                <input type="text" id="telefono" name="telefono" required>
            </div>
            <div class="form-group">
                <label for="date">Fecha Preferida:</label>
                <input type="date" id="fecha" name="fecha" required>
            </div>
            <div class="form-group">
                <label for="text">Descripción del Proyecto:</label>
                <textarea id="text" name="descripcion" rows="4" required></textarea>
            </div>
            <button type="submit" class="submit-btn">Enviar Solicitud</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>