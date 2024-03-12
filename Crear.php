<?php include 'plantilla.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <form action="guardar.php" method="POST">
                Nombre: <input class="form-control" type="text" name="nombre"><br />
                Precio: <input class="form-control" type="text" name="precio"><br />
                <input class="btn btn-success" type="submit" value="Guardar producto">
        </div>
    </div>
</div>

</form>