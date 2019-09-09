<?php 
include "header.php";
?>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <?php
                include "menu.php";
                ?>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <h3>PERFILES</h3>
                    <a class="ml-auto my-auto" href="#">nuevo perfil</a>                    
                </div>
                <div class="row">
                    <input type="search" class="form-control" placeholder="buscar">
                </div>
                <div class="row mt-4 p-5">
                <div class="row">                    
                    <div class="card" style="width: 13rem;">
                        <div class="card-body">
                            <h5 class="card-title text-center"><i class="fa fa-cog fa-2x"></i></h5>
                            <h6 class="card-subtitle mb-2 text-center text-muted">ADMINISTRADOR</h6>
                            <p class="card-text">
                                <b>CREACION</b> : 21-02-2019
                            </p>
                            <p class="card-text">
                                <b>ESTADO</b> : ACTIVO
                            </p>
                            <!-- <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a> -->
                        </div>
                    </div>
                    <div class="card" style="width: 13rem;">
                        <div class="card-body">
                            <h5 class="card-title text-center"><i class="fa fa-ambulance fa-2x"></i></h5>
                            <h6 class="card-subtitle mb-2 text-center text-muted">CLINICA</h6>
                            <p class="card-text">
                                <b>CREACION</b> : 21-02-2019
                            </p>
                            <p class="card-text">
                                <b>ESTADO</b> : ACTIVO
                            </p>
                            <!-- <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a> -->
                        </div>
                    </div>
                    <div class="card" style="width: 13rem;">
                        <div class="card-body">
                            <h5 class="card-title text-center"><i class="fa fa-user fa-2x"></i></h5>
                            <h6 class="card-subtitle mb-2 text-center text-muted">PACIENTE</h6>
                            <p class="card-text">
                                <b>CREACION</b> : 21-02-2019
                            </p>
                            <p class="card-text">
                                <b>ESTADO</b> : ACTIVO
                            </p>
                            <!-- <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a> -->
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-4 my-auto">
                <div class="row">
                    <div class="col-md-12">
                        <form>
                            <div class="form-group">
                                <label for="perfil">PERFIL - ROL</label>
                                <input type="text" class="form-control" id="perfil" placeholder="perfil">
                            </div>
                            <div class="form-group">
                                <label for="logo">LOGO</label>
                                <input type="file" class="form-control" id="logo">
                            </div>
                            <div class="form-group">
                                <label for="logo">ACCESOS</label>
                                <hr>
                                <div class="input-group mb-3">
                                    <!-- <input type="text" class="form-control" aria-label="Text input with checkbox"> -->
                                    <label for="">Clinicas</label>
                                    <div class="input-group-prepend ml-auto">
                                        <div class="input-group-text">
                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <!-- <input type="text" class="form-control" aria-label="Text input with checkbox"> -->
                                    <label for="">Pacientes</label>
                                    <div class="input-group-prepend ml-auto">
                                        <div class="input-group-text">
                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <!-- <input type="text" class="form-control" aria-label="Text input with checkbox"> -->
                                    <label for="">Perfiles</label>
                                    <div class="input-group-prepend ml-auto">
                                        <div class="input-group-text">
                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <!-- <input type="text" class="form-control" aria-label="Text input with checkbox"> -->
                                    <label for="">Guías</label>
                                    <div class="input-group-prepend ml-auto">
                                        <div class="input-group-text">
                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <!-- <input type="text" class="form-control" aria-label="Text input with checkbox"> -->
                                    <label for="">Paquetes</label>
                                    <div class="input-group-prepend ml-auto">
                                        <div class="input-group-text">
                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <!-- <input type="text" class="form-control" aria-label="Text input with checkbox"> -->
                                    <label for="">Redes sociales</label>
                                    <div class="input-group-prepend ml-auto">
                                        <div class="input-group-text">
                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                </div>
                                
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