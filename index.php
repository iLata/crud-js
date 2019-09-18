<?php 
    include('./src/scripts/php/db.php');
?>

<?php 
    include('./src/includes/header.php');
?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <form>
                    <div class="form-group">
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre de la persona" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="edad" id="edad" class="form-control" placeholder="Edad de la persona">
                    </div>
                    <div class="form-group">
                        <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Dirección de la persona">
                    </div>
                </form>
                <button id="insertUser" type="button" class="btn btn-success btn-block">Guardar</button>
            </div>
        </div>
        <div class="col-md-8">

        </div>
    </div>
</div>

<?php
    include('./src/includes/footer.php');
?>