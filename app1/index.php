<?php
include "../inc/header.php";
?>
<div class="text-center">
        <h1>Tafel genereer-app</h1>
    </div>
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <form class="row g-3 mb-2">
                    <div class="col-md-3">
                        <label for="inputTafelvan" class="form-label">Tafel van</label>
                        <input type="number" class="form-control" id="inputTafelvan">
                    </div>
                    <div class="col-md-3">
                        <label for="inputTafeltot" class="form-label">Tafel tot</label>
                        <input type="number" class="form-control" id="inputTafeltot">
                    </div>
                    <div class="d-grid col-md-6 mt-5">
                        <button type="button" class="btn btn-primary" onclick="showTafel()">GO</button>
                    </div>
                </form>
                <div class="card text-center">
                    <div id="tafelheader" class="card-header">
                        Tafel van ...
                    </div>
                    <div id="tafel" class="card-body">
                    </div>
                    <div class="card-footer text-body-secondary">
                        made by OSD
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
<?php
    include "../inc/footer.php";
?>