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
                    <div class="col-md-12">
                        <table class="table table-hover">
                            <thead>
                                <tr class="table-active">
                                    <th scope="col">#</th>
                                    <th scope="col">TITULO</th>
                                    <th scope="col">ICONO</th>
                                    <th scope="col">LINK</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Inicio</td>
                                    <td><i class="fa fa-home" aria-hidden="true"></i></td>
                                    <td>http://home.html</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Conócenos</td>
                                    <td><i class="fa fa-home" aria-hidden="true"></i></td>
                                    <td>http://home.html</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Servicios</td>
                                    <td><i class="fa fa-home" aria-hidden="true"></i></td>
                                    <td>http://home.html</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Laboratorio</td>
                                    <td><i class="fa fa-home" aria-hidden="true"></i></td>
                                    <td>http://home.html</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Categorias</td>
                                    <td><i class="fa fa-home" aria-hidden="true"></i></td>
                                    <td>http://home.html</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Contactenos</td>
                                    <td><i class="fa fa-home" aria-hidden="true"></i></td>
                                    <td>http://home.html</td>
                                </tr>
                            </tbody>
                        </table>
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