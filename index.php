<?php include_once "encabezado.php"; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex flex-column justify-content-center align-items-center vh-100">
    
    <div class="text-center mb-5">
        <h1 class="fw-bold">Bienvenido</h1>
        <p class="text-muted">Selecciona una opción</p>
    </div>

    <div class="d-grid gap-4 col-6 mx-auto">
        <a href="insertar.php" class="btn btn-primary btn-lg shadow">
            INSERTAR
        </a>
        <a href="listar.php" class="btn btn-success btn-lg shadow">
            MOSTRAR
        </a>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php include_once "pie.php"; ?>