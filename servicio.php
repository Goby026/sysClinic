<?php 
include "header.php";
?>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <?php
                include "./menu.php";
                ?>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-right">
                            <a href=""> nuevo servicio </a>
                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="./assets/img/service.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Card title</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="./assets/img/service.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Card title</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="./assets/img/service.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Card title</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="./assets/img/service.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Card title</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="./assets/img/service.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Card title</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="./assets/img/service.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Card title</h5>
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