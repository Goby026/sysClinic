<?php 
include "header.php";
?>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <?php
                include "./menu.php";
                ?>
            </div>
            <div class="col-md-6">
            <div class="row">
                <h3>Mis notificaciones</h3>                
                <a class="ml-auto my-auto" href="./notificacion_config.php">configuración</a>
            </div>
            <hr>
            <div class="row">
                <div class="col-md 4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="todo">
                        <label class="form-check-label" for="todo">
                            Seleccionar todo
                        </label>
                    </div>
                </div>
                <div class="col-md 4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="no-leido">
                        <label class="form-check-label" for="no-leido">
                            Seleccionar no leidos
                        </label>
                    </div>
                </div>
                <div class="col-md 4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="marcar-leido">
                        <label class="form-check-label" for="marcar-leido">
                            Marcar como leido
                        </label>
                    </div>
                </div>
            </div>
            <ul class="list-group mt-4">
                <li class="list-group-item"><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"> <b>El paciente ______ envió una propuesta de cita</b> </li>
                <li class="list-group-item"><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"> Se calificó tu clinica con 4 estrellas</li>
                <li class="list-group-item"><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"> El paciente ______ envió una propuesta de cita</li>
                <li class="list-group-item"><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"> Se calificó tu clinica con 4 estrellas</li>
                <li class="list-group-item"><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"> Se calificó tu clinica con 2 estrellas</li>
            </ul>
        </div>
    </div>
<?php
include "./footer.php";
?>