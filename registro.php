<?php 
include "header.php";
?>
<!-- REGISTRO -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <!-- Image and text -->
                    <nav class="navbar navbar-light bg-light">
                        <h3>CREAR CUENTA</h3>
                        <hr>
                        <a class="navbar-brand my-2 text-right" href="#">
                            <img src="./assets/img/image.png" width="60%" height="90px" class="d-inline-block align-top"
                                alt="">
                        </a>
                    </nav>

                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 border-right border-dark">
                            <section>
                                <form>
                                    <div class="form-group">
                                        <label for="razonSocial">RAZON SOCIAL / NOMBRE</label>
                                        <input type="text" class="form-control" id="razonSocial"
                                            aria-describedby="razonSocialHelp" placeholder="razon social / nombre">
                                    </div>
                                    <div class="form-group">
                                        <label for="ruc">RUC</label>
                                        <input type="text" class="form-control" id="ruc" aria-describedby="rucHelp"
                                            placeholder="ruc">
                                    </div>
                                    <div class="form-group">
                                        <label for="direccion">DIRECCION</label>
                                        <input type="password" class="form-control" id="direccion"
                                            placeholder="dirección">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">CREAR CUENTA
                                        GRATIS</button>
                                </form>
                            </section>
                        </div>
                        <div class="col-md-6 my-auto">
                            <section>
                                <button class="btn btn-light btn-outline btn-block"><i class="fa fa-google"></i>
                                    Registrarme con google</button>
                                <button class="btn btn-light btn-outline btn-block"><i class="fa fa-facebook"></i>
                                    Registrarme con facebook</button>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="card footer">

                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "./footer.php";
?>