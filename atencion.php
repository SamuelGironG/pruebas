<?php

date_default_timezone_set("America/Bogota");

$hora = date("H");

if ($hora > 8 && $hora < 15) {
    $estado = "Abierto";
    $tipomensaje = "success";
    $mensaje = "El banco se encuentra abierto, bienvenido";
} else {
    $estado = "Cerrado";
    $tipomensaje = "danger";
    $mensaje = "El banco se encuentra cerrado";
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f4f4;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 25px;
            display: flex;
        }

        .contenedor {
            background: #e0c4c4;
            width: 400px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container contenedor">
        <h1><?= $estado ?></h1>
        <p>Hora actual: <?php echo date("H:i:s") ?></p>
        <?php if (!empty($mensaje)) { ?>
            <div class="alert alert-<?= $tipomensaje ?>">
                <?= $mensaje ?>
            </div>
        <?php } ?>
    </div>
    <script>
        setTimeout(function() {
            location.reload();
        }, 1000);
    </script>
</body>

</html>