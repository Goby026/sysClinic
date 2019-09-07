<?php
include "header.php";
?>

    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <!-- MENU -->
                <?php
                include "./menu.php";
                 ?>
            </div>
            <div class="col-md-6">
                <?php
                include "./portafolio_sections.php";
                ?>
                <div class="row">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4 my-auto text-center">
                                <i class="fa fa-calendar-o fa-3x" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Citas online</h5>
                                    <p class="card-text">Facil sencillo y rapido.</p>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4 my-auto text-center">
                                <i class="fa fa-clock-o fa-3x" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Nuestro horario</h5>
                                    <p class="card-text">Lun - Vie 9:00am - 8:00pm/Sab 9:00am-1:00pm</p>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4 my-auto text-center">
                                <i class="fa fa-phone fa-3x" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Llamanos (01) 436-2707</h5>
                                    <p class="card-text">Calle Wari 148 Santiago de Surco-Alt cdra 3 Av El Polo</p>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <form>
                            <div class="form-group">
                                <label for="nombres">Icono</label>
                                <input type="text" class="form-control" id="nombres" placeholder="name@example.com">
                            </div>
                            <div class="form-group">
                                <label for="apellidos">Titulo</label>
                                <input type="text" class="form-control" id="apellidos" placeholder="name@example.com">
                            </div>
                            <div class="form-group">
                                <label for="apellidos">Link</label>
                                <input type="text" class="form-control" id="apellidos" placeholder="name@example.com">
                            </div>

                            <div class="form-row">
                                <div class="col">
                                    <button type="button" class="btn btn-success btn-block"><i
                                            class="fa fa-save"></i></button>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-danger btn-block"><i
                                            class="fa fa-ban"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include "./footer.php";
?>