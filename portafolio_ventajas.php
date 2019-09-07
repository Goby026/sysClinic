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
                <div class="row mt-3">
                    <div class="col-md-4">
                        <div class="card">
                            <p class="text-center">
                                <i class="fa fa-laptop fa-4x" aria-hidden="true"></i>
                            </p>
                            <div class="card-body">
                                <p class="card-text">
                                    Experiencia diferente 
                                </p>
                                <p class="text-justify">
                                    Mejoramos la experiencia de nuestros pacientes brindándoles un servicio personalizado de calidad excepcional. En una atmósfera vanguardista ZEN.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <p class="text-center">
                                <i class="fa fa-eercast fa-4x" aria-hidden="true"></i>
                            </p>
                            <div class="card-body">
                                <p class="card-text">
                                    Tecnología digital
                                </p>
                                <p class="text-justify">
                                    Empleamos equipos de última generación que nos han permitido brindar un servicio más rápido, preciso y confortable para nuestros pacientes.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <p class="text-center">
                                <i class="fa fa-graduation-cap fa-4x" aria-hidden="true"></i>
                            </p>
                            <div class="card-body">
                                <p class="card-text">
                                    Laboratorio in house
                                </p>
                                <p class="text-justify">
                                    Contamos con un centro de laboratorio especializado en la elaboración de rehabilitaciones dentales altamente estéticas, naturales, precisas y funcionales.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <p class="text-center">
                                <i class="fa fa-calendar-times-o fa-4x" aria-hidden="true"></i>
                            </p>
                            <div class="card-body">
                                <p class="card-text">
                                    Diagnósticos rápidos
                                </p>
                                <p class="text-justify">
                                    Contamos con un protocolo de diagnóstico clínico y radiográfico con el cual el especialista podrá determinar el tratamiento adecuado para el problema oral.
                                </p>
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
                                <input type="text" class="form-control" id="nombres" placeholder="icons">
                            </div>
                            <div class="form-group">
                                <label for="apellidos">Descripción</label>
                                <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
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