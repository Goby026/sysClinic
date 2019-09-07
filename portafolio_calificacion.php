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
                <div class="row mt-4">
                <div class="col md 12">
                    <div class="card" style="width: 18rem;">
                        <div class="card-header">
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Mi clinica</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Descripción</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary btn-block">Reservas</a>
                            <a href="#" class="btn btn-primary btn-block">Opiniones</a>
                        </div>
                        <div class="card-footer">
                            <input type="checkbox" class="form-control">
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                
            </div>
        </div>
    </div>

<?php
include "./footer.php";
?>