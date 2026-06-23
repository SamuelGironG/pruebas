<?php

$mensaje = "";
$tipomensaje = "";
$hora_normal = 10000;
$extras = "";
$total = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = trim($_POST["nombre"]);
    $horas = $_POST["horas"];

    if (empty($nombre) || empty($horas)) {
        $mensaje = "Los espacios son obligatorios";
        $tipomensaje = "danger";
    } elseif (strlen($nombre) < 2) {
        $mensaje = "El nombre no es valido";
        $tipomensaje = "danger";
    } elseif ($horas <= 0) {
        $mensaje = "Deben ser horas validas";
        $tipomensaje = "danger";
    } else {
        if ($horas > 40) {
            $horas_normales = 40;
            $extras = $horas - 40;
            $total_normal = $horas_normales * $hora_normal;
            $total_extras = $extras * 15000;
            $total_final = $total_normal + $total_extras;
            $mensaje = "El pago total es de: " . $total_final;
            $tipomensaje = "success";
        } else {
            $total = $hora_normal * $horas;
            $mensaje = "El pago total es de: " . $total;
            $tipomensaje = "success";
        }
    }
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
            display: flex;
        }

        .card {
            width: 400px;
        }
    </style>
</head>

<body>
    <div class="card">
        <div class="card-header">
            <h2>Sistema de pago por horas trabajadas</h2>
        </div>
        <div class="card-body">
            <form method="POST" class="form">
                <div>
                    <label class="label-control">Nombre:</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Ingrese su nombre">
                </div>
                <div>
                    <label class="label-control">Horas trabajadas:</label>
                    <input type="number" name="horas" class="form-control" placeholder="Ingrese las horas trabajadas en la semana">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Enviar horas</button>
            </form>

        </div>
        <?php if (!empty($mensaje)) { ?>
            <div class="alert alert-<?= $tipomensaje ?>">

                <h5><?= $mensaje ?></h5>

                <?php if ($tipomensaje == "success") { ?>

                    <span class="badge bg-primary">
                        Horas trabajadas: <?= $horas ?>
                    </span>

                    <?php if ($horas > 40) { ?>
                        <span class="badge bg-warning text-dark">
                            Horas extras: <?= $extras ?>
                        </span>
                    <?php } ?>

                    <span class="badge bg-success">
                        Pago total: $<?= number_format($total_final > 0 ? $total_final : $total, 0, ',', '.') ?>
                    </span>

                <?php } ?>

            </div>
        <?php } ?>
    </div>
</body>

</html>