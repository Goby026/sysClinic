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
                    <h3>CLINICAS</h3>
                    <a class="ml-auto my-auto" href="#">nueva clínica</a>                    
                </div>
                <div class="row">
                    <input type="search" class="form-control" placeholder="buscar">
                </div>
                <div class="row mt-2 p-5">
                    <ol class="list-group">
                        <li class="list-group-item">CLINICA DEL CENTRO</li>
                        <li class="list-group-item">CLINICA DEL SUR</li>
                        <li class="list-group-item">CLINICA DEL NORTE</li>
                        <li class="list-group-item">CLINICA DEL OESTE</li>
                        <li class="list-group-item">CLINICA ORIENTAL</li>
                        <li class="list-group-item">CLINICA DEL ESTE</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-4  my-auto">
                <div class="row">
                    <div class="col-md-12">
                        <form>
                            <div class="form-group">
                                <label for="nombres">Clínica</label>
                                <input type="text" class="form-control" id="nombres" placeholder="razon social">
                            </div>
                            <div class="form-group">
                                <label for="ruc">RUC</label>
                                <input type="text" class="form-control" id="ruc" placeholder="nro ruc">
                            </div>
                            <div class="form-group">
                                <label for="creacion">Fecha de creación</label>
                                <input type="text" class="form-control" id="creacion">
                            </div>
                            <div class="form-group">
                                <label for="estado">Estado</label>
                                <select class="form-control" id="estado">
                                    <option>Activo</option>
                                    <option>Deuda</option>                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="logo">Logo</label>
                                <input type="file" class="form-control" id="logo">
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