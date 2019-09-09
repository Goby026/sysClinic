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
                    <h3>PACIENTES</h3>
                    <a class="ml-auto my-auto" href="#">nuevo paciente</a>                    
                </div>
                <div class="row">
                    <input type="search" class="form-control" placeholder="buscar">
                </div>
                <div class="row mt-2 p-5">
                    <ol class="list-group">
                        <li class="list-group-item">JOSE PAOLO GUERRERO</li>
                        <li class="list-group-item">JEFFERSON FARFAN</li>
                        <li class="list-group-item">ANDRE CARRILLO</li>
                        <li class="list-group-item">RENATO TAPIA</li>
                        <li class="list-group-item">EDINSON FLORES</li>
                        <li class="list-group-item">LUIS ADVINCULA</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-4  my-auto">
                <div class="row">
                    <div class="col-md-12">
                        <form>
                            <div class="form-group">
                                <label for="nombres">NOMBRES</label>
                                <input type="text" class="form-control" id="nombres" placeholder="nombres">
                            </div>
                            <div class="form-group">
                                <label for="apellidos">APELLIDOS</label>
                                <input type="text" class="form-control" id="apellidos" placeholder="apellidos">
                            </div>
                            <div class="form-group">
                                <label for="nacimiento">FECHA DE NACIMIENTO</label>
                                <input type="text" class="form-control" id="nacimiento">
                            </div>
                            <div class="form-group">
                                <label for="estado">Estado</label>
                                <select class="form-control" id="estado">
                                    <option>Activo</option>
                                    <option>Inactivo</option>                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="foto">FOTO</label>
                                <input type="file" class="form-control" id="foto">
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