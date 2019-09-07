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
                        <div class="text-center">
                            <img src="./assets/img/image.png" class="rounded" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-auto">
                <section>
                    <form>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                    </form>
                </section>

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
            </div>
        </div>
    </div>

<?php
include "./footer.php";
?>