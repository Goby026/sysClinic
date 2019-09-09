<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="./assets/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Font awesome -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- My Styles -->
    <link rel="stylesheet" href="./assets/estyles.css">

    <!-- Full calendar css -->
    <link href='https://unpkg.com/fullcalendar@3.10.1/dist/fullcalendar.min.css' rel='stylesheet' />
    <link href='https://unpkg.com/fullcalendar@3.10.1/dist/fullcalendar.print.css' rel='stylesheet' media='print' />

    <!-- Chart.js css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css">

    <title>Document</title>
    
    <!-- Jquery -->    
    <script src='https://unpkg.com/jquery@3.4.1/dist/jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Moment js -->
    <script src='https://unpkg.com/moment@2.24.0/min/moment.min.js'></script>
    <!-- FullCalendar -->
    <script src='https://unpkg.com/fullcalendar@3.10.1/dist/fullcalendar.min.js'></script>
    <!-- ChartJs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
</head>

<body class="bg-light">

    <!-- HEADER -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 m-0 p-0 bg-light">

                <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="./assets/img/image.png" height="60px"
                            class="d-inline-block align-top img-fluid w-75" alt=""></a>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle text-monospace" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bell"></i> 
                                    </button>
                                    <div class="dropdown-menu bg-secondary" aria-labelledby="dropdownMenuButton">
                                        <!-- <a class="dropdown-item" href="./notificaciones.php">Nueva cita</a>
                                        <a class="dropdown-item" href="./notificaciones.php">Se realizó una calificacion</a>
                                        <a class="dropdown-item" href="./notificaciones.php">Nueva cita</a> -->
                                    </div>
                                </div>                                
                            </li>
                            <li class="nav-item">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle text-monospace" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Mi cuenta
                                    </button>
                                    <div class="dropdown-menu bg-secondary" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="./configuracion.php">Configuración</a>
                                        <a class="dropdown-item" href="./panelControl.php">Panel de control</a>
                                        <!-- <a class="dropdown-item" href="./notificaciones.php">Notificaciones</a> -->
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./index.php" tabindex="-1" aria-disabled="true">
                                    <p class="text-light text-monospace"> <i class="fa fa-sign-out" aria-hidden="true"></i> Salir
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

            </div>
        </div>
    </div>

    <br><br>