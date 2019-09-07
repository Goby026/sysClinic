<?php
require "./header.php";
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
            <h4>CITAS</h4>
            <hr>
                <div class="row">
                <div class="card" style="width: 11rem;">
                    <div class="card-body">
                        <h5 class="card-title">Raul Huaman</h5>
                        <hr>                        
                        <p class="card-text">
                            Fecha: 05/09/2019
                        </p>
                        <p class="card-text">
                            Hora: 4:00 pm
                        </p>
                        <a href="#" class="btn btn-primary btn-block">Confirmar</a>
                        <a href="#" class="btn btn-primary btn-block">Reprogramar</a>
                        <a href="#" class="btn btn-primary btn-block">Cancelar</a>
                    </div>
                </div>
                <div class="card" style="width: 11rem;">
                    <div class="card-body">
                        <h5 class="card-title">Frank Canchari</h5>
                        <hr>                        
                        <p class="card-text">
                            Fecha: 05/09/2019
                        </p>
                        <p class="card-text">
                            Hora: 4:00 pm
                        </p>
                        <a href="#" class="btn btn-primary btn-block">Confirmar</a>
                        <a href="#" class="btn btn-primary btn-block">Reprogramar</a>
                        <a href="#" class="btn btn-primary btn-block">Cancelar</a>
                    </div>
                </div>
                <div class="card" style="width: 11rem;">
                    <div class="card-body">
                        <h5 class="card-title">Grover Rendich</h5>
                        <hr>                        
                        <p class="card-text">
                            Fecha: 05/09/2019
                        </p>
                        <p class="card-text">
                            Hora: 4:00 pm
                        </p>
                        <a href="#" class="btn btn-primary btn-block">Confirmar</a>
                        <a href="#" class="btn btn-primary btn-block">Reprogramar</a>
                        <a href="#" class="btn btn-primary btn-block">Cancelar</a>
                    </div>
                </div>
                <div class="card" style="width: 11rem;">
                    <div class="card-body">
                        <h5 class="card-title">Yuri Peña</h5>
                        <hr>                        
                        <p class="card-text">
                            Fecha: 05/09/2019
                        </p>
                        <p class="card-text">
                            Hora: 4:00 pm
                        </p>
                        <a href="#" class="btn btn-primary btn-block">Confirmar</a>
                        <a href="#" class="btn btn-primary btn-block">Reprogramar</a>
                        <a href="#" class="btn btn-primary btn-block">Cancelar</a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="row">
                    <div class="col-md-12">
                        <form>
                            <div class="form-group">
                                <label for="nombres">Fecha</label>
                                <input type="date" class="form-control" id="nombres" placeholder="name@example.com">
                            </div>
                            <div class="form-group">
                                <label for="apellidos">Hora</label>
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