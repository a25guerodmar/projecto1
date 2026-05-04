<?php include_once "encabezado.php"; ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-6 text-center">

            <div class="card shadow p-4">
                
                <h2 class="text-success mb-3">✅ ¡Videojuego registrado!</h2>
                
                <p class="mb-4">
                    El videojuego se ha guardado correctamente en la base de datos.
                </p>

                <a href="listar.php" class="btn btn-primary me-2">
                    Ver lista
                </a>

                <a href="insertar.php" class="btn btn-success">
                    Registrar otro
                </a>

            </div>

        </div>
    </div>
</div>

<?php include_once "pie.php"; ?>