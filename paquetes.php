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
                    <h3>PAQUETES DE SERVICIO</h3>
                    <a class="ml-auto my-auto" href="#">nuevo paquete</a>                    
                </div>
                <div class="row">
                    <input type="search" class="form-control" placeholder="buscar">
                </div>
                <div class="row mt-4 p-5">
                <div class="row">                    
                    <div class="card" style="width: 13rem;">
                        <div class="card-body">
                            <h5 class="card-title text-center">EXPERTO</h5>                            
                            <ul>
                                <li>Precio: 1000.00</li>
                                <li>Descripción</li>
                                <li>Característica #</li>
                                <li>Característica #</li>
                                <li>Característica #</li>
                            </ul>
                            <!-- <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a> -->
                        </div>
                    </div>
                    <div class="card" style="width: 13rem;">
                        <div class="card-body">
                            <h5 class="card-title text-center">BASICO</h5>                            
                            <ul>
                                <li>Precio: 1000.00</li>
                                <li>Descripción</li>
                                <li>Característica #</li>
                                <li>Característica #</li>
                                <li>Característica #</li>
                            </ul>
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
                                <label for="paquete">NOMBRE DE PAQUETE</label>
                                <input type="text" class="form-control" id="paquete" placeholder="paquete">
                            </div>
                            <div class="form-group">
                                <label for="precio">PRECIO</label>
                                <input type="text" class="form-control" id="precio" placeholder="precio">
                            </div>

                            <div class="form-group">
                                <label for="precio">DESCRIPCION</label>
                                <textarea class="form-control"></textarea>
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