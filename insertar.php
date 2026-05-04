<?php include_once "encabezado.php"; ?>

<div class="row">
    <div class="col-12">
        <h1>Registrar videojuego</h1>

        <form action="registrar.php" method="POST">

            <div class="form-group">
                <label>Nombre</label>
                <input class="form-control" type="text" name="nombre" required>
            </div>

            <div class="form-group">
                <label>Descripción</label>
                <textarea class="form-control" name="descripcion" rows="5" required></textarea>
            </div>

            <div class="form-group">
                <label>Género</label>
                <select class="form-control" name="genero" required>
                    <option value="Accion">Acción</option>
                    <option value="RPG">RPG</option>
                    <option value="Estrategia">Estrategia</option>
                    <option value="Deportes">Deportes</option>
                </select>
            </div>

            <button class="btn btn-success">Guardar</button>
            <a class="btn btn-warning" href="index.php">Volver</a>

        </form>
    </div>
</div>

<?php include_once "pie.php"; ?>