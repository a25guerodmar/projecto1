<?php
include_once "encabezado.php";
$mysqli = include_once "conexion.php";
$id = $_GET["id"];
$sentencia = $mysqli->prepare("SELECT id, nombre, descripcion, genero FROM videojuegos WHERE id = ?");
$sentencia->bind_param("i", $id);
$sentencia->execute();
$resultado = $sentencia->get_result();
$videojuego = $resultado->fetch_assoc();
if (!$videojuego) {
    exit("No hay resultados para ese ID");
}
?>

<div class="row">
    <div class="col-12">
        <h1>Actualizar videojuego</h1>
        <form action="actualizar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $videojuego["id"] ?>">

            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input value="<?php echo $videojuego["nombre"] ?>" class="form-control" type="text" name="nombre" required>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" name="descripcion" rows="5" required><?php echo $videojuego["descripcion"] ?></textarea>
            </div>

            <div class="form-group">
                <label for="genero">Género</label>
                <select class="form-control" name="genero" required>
                    <option value="Accion" <?php if($videojuego["genero"]=="Accion") echo "selected"; ?>>Acción</option>
                    <option value="RPG" <?php if($videojuego["genero"]=="RPG") echo "selected"; ?>>RPG</option>
                    <option value="Estrategia" <?php if($videojuego["genero"]=="Estrategia") echo "selected"; ?>>Estrategia</option>
                    <option value="Deportes" <?php if($videojuego["genero"]=="Deportes") echo "selected"; ?>>Deportes</option>
                </select>
            </div>

            <button class="btn btn-success">Guardar</button>
            <a class="btn btn-warning" href="listar.php">Volver</a>
        </form>
    </div>
</div>

<?php include_once "pie.php"; ?>