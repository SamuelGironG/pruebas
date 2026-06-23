<?php

date_default_timezone_set("America/Bogota");

$hora = date("H");
$imagen = '';
$mensaje = '';
$tipomensaje = '';

if ($hora >= 6 && $hora < 12) {
    $mensaje = "Buenos dias";
    $tipomensaje = "warning";
    $imagen = "img/istockphoto-926681406-612x612.jpg";
    $colorfondo = "#FFF3CD";
} elseif ($hora >= 12 && $hora < 18) {
    $mensaje = "Buenas tardes";
    $tipomensaje = "success";
    $imagen = "img/tarde.jpg";
    $colorfondo = "#CFE2FF";
} elseif ($hora >= 18 && $hora < 24) {
    $mensaje = "Buenas noches";
    $tipomensaje = "primary";
    $imagen = "img/photo-1722925406683-d5e4090e6d96.avif";
    $colorfondo = "#D3D3D3";
} else {
    $mensaje = "Hora de dormir";
    $tipomensaje = "dark";
    $imagen = "img/dormir.png";
    $colorfondo = "#E2E3E5";
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
            background-color: <?= $colorfondo ?>;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            width: 400px;
        }
        .card img {
            height: 250px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <div class="card">
        <img src="<?= $imagen ?>" alt="imagen del momento horario" class="card img-top">
        <div class="card-nody" text-center>
            <h2>Sistema horario</h2>
            <p class="fw-bold">
                Hora actual: <?= $hora ?>
            </p>
            <div class="alert <?= $tipomensaje ?>">
                <?php echo $mensaje; ?>
            </div>
            
        </div>

    </div>
</body>

</html>