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
                    <h3>GUIAS DE USUARIO</h3>
                    <a class="ml-auto my-auto" href="#">nueva guía</a>                    
                </div>
                <div class="row">
                    <input type="search" class="form-control" placeholder="buscar">
                </div>
                <div class="row mt-4 p-5">
                    <ol class="list-group">
                        <li class="list-group-item"><i class="fa fa-file-pdf-o"></i>  GUIA DE PAGOS - PACIENTE</li>
                        <li class="list-group-item"><i class="fa fa-file-pdf-o"></i>  GUIA DE PAGOS - CLINICA</li>
                        <li class="list-group-item"><i class="fa fa-file-pdf-o"></i>  GUIA DE FUNCIONAMIENTO DEL BUSCADOR</li>
                        <li class="list-group-item"><i class="fa fa-file-pdf-o"></i>  GUIA DE CONFIGURACION DE PORTAFOLIO</li>
                        <li class="list-group-item"><i class="fa fa-file-pdf-o"></i>  GUIA DE CONFIGURACION DE DATOS - PACIENTE</li>
                        <li class="list-group-item"><i class="fa fa-file-pdf-o"></i>  GUIA DE CONFIGURACION DE DATOS - CLINICA</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-4 my-auto">
                <div class="row">
                    <div class="col-md-12">
                        <form>
                            <div class="form-group">
                                <label for="guia">NOMBRE DE GUÍA</label>
                                <input type="text" class="form-control" id="guia" placeholder="razon social">
                            </div>
                            <div class="form-group">
                                <label for="pdf">PDF</label>
                                <input type="file" class="form-control" id="pdf">
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