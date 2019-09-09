<?php
include "./header.php";
 ?>

<!-- LOGIN -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <!-- Image and text -->
                    <nav class="navbar navbar-light bg-light">
                        <h3>INICIAR SESION</h3>
                        <hr>
                        <a class="navbar-brand my-2 text-right" href="./index.php">
                            <img src="./assets/img/image.png" width="60%" height="90px" class="d-inline-block align-top"
                                alt="">
                        </a>
                    </nav>

                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 border-right border-dark">
                            <section>
                                <form action="./panelControl.php">
                                    <div class="form-group">
                                        <label for="usuario">USUARIO O CORREO</label>
                                        <input type="text" class="form-control" id="usuario"
                                            aria-describedby="usuarioHelp" placeholder="usuario / correo">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">CONTRASEÑA</label>
                                        <input type="password" class="form-control" id="password"
                                            placeholder="contraseña">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">INICAR SESION</button>
                                </form>
                                <div class="text-center mt-3">
                                    <a class="alert-link" href="./registro.php">registrarme</a>
                                </div>
                            </section>
                        </div>
                        <div class="col-md-6 my-auto">
                            <section>
                                <button class="btn btn-light btn-outline btn-block"><i class="fa fa-google"></i>
                                    Conectarme con mi cuenta de
                                    google</button>
                                <button class="btn btn-light btn-outline btn-block"><i class="fa fa-facebook"></i>
                                    Conectarme con mi cuenta de
                                    facebook</button>
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