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
                <?php
                    include "./portafolio_sections.php";
                ?>
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