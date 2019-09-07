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
                            <a href=""> agregar tarjeta </a>
                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="card">
                            <p class="text-center">
                                <i class="fa fa-cc-visa fa-5x" aria-hidden="true"></i>
                            </p>
                            <div class="card-body">
                                <h5 class="card-title text-center">Visa</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <p class="text-center">
                                <i class="fa fa-cc-mastercard fa-5x" aria-hidden="true"></i>
                            </p>
                            <div class="card-body">
                                <h5 class="card-title text-center">Mastercard</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <p class="text-center">
                                <i class="fa fa-credit-card-alt fa-5x" aria-hidden="true"></i>
                            </p>
                            <div class="card-body">
                                <h5 class="card-title text-center">American Express</h5>
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
                                <label for="tarjeta">NUMERO DE TARJETA</label>
                                <input type="text" class="form-control" id="tarjeta" placeholder="1234 Main St">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="expiracion">EXPIRACION</label>
                                    <input type="email" class="form-control" id="expiracion" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="ccv">CCV</label>
                                    <input type="password" class="form-control" id="ccv"
                                        placeholder="Password">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nombre">NOMBRE</label>
                                    <input type="email" class="form-control" id="nombre" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="apellido">APELLIDO</label>
                                    <input type="password" class="form-control" id="apellido"
                                        placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">DIRECCION</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="pais">PAIS</label>
                                    <input type="email" class="form-control" id="pais" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="provincia">PROVINCIA</label>
                                    <input type="password" class="form-control" id="provincia"
                                        placeholder="Password">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">CIUDAD</label>
                                    <input type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputState">COD-POSTAL</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
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