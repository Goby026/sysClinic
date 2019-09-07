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
                    <div id="calendar"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <form>
                            <div class="form-group">
                                <label for="inputAddress">TURNO</label>
                                <input type="text" class="form-control" id="inputAddress">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">INCIO</label>
                                    <input type="date" class="form-control" id="inputEmail4">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">FIN</label>
                                    <input type="date" class="form-control" id="inputPassword4">
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

    <script>
        $(function() {

        $('#calendar').fullCalendar({
        themeSystem: 'bootstrap4',
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay,listMonth'
        },
        weekNumbers: true,
        eventLimit: true, // allow "more" link when too many events
        events: 'https://fullcalendar.io/demo-events.json'
        });

        });
    </script>
<?php
include "./footer.php";
?>