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
                    <h3>REDES SOCIALES - CONTACTOS</h3>
                    <a class="ml-auto my-auto" href="#">nueva red</a>                    
                </div>
                <div class="row">
                    <input type="search" class="form-control" placeholder="buscar">
                </div>
                <div class="row mt-3 p-5">

                <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">SERVICIO</th>
                        <th scope="col">logo</th>
                        <th scope="col">url / número</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Facebook</td>
                        <td><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></td>
                        <td>https://www.facebook.com/</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Whatsapp</td>
                        <td><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></td>
                        <td>https://www.whatsapp.com/</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                        <td>Instagram</td>
                        <td><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></td>
                        <td>https://www.instagram.com/</td>
                    </tr>
                </tbody>
                </table>
                    
                </div>
            </div>
            <div class="col-md-4  my-auto">
                <div class="row">
                    <div class="col-md-12">
                        <form>
                            <div class="form-group">
                                <label for="servicio">SERVICIO</label>
                                <input type="text" class="form-control" id="servicio" placeholder="servicio">
                            </div>
                            <div class="form-group">
                                <label for="logo">LOGO</label>
                                <input type="text" class="form-control" id="logo" placeholder="logo">
                            </div>
                            <div class="form-group">
                                <label for="path">URL / NUMERO</label>
                                <input type="text" class="form-control" id="path">
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