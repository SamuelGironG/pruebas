<?php
date_default_timezone_set("America/Bogota");

$hora = date("H");
$temperatura = rand(-30, 38);
$cpu = rand(0, 120);

$usuarios = rand(0, 200);

if ($hora >= 9 && $hora < 17) {
    $colorfondo = 'white';
    $empresa = "Abierta";
} else {
    $colorfondo = 'Black';
    $empresa = "Cerrada";
}

if ($temperatura < 0) {
    $estadotemp = "Temperatura bajo cero, ciudado";
    $colortemp = "#3b82f6";
} elseif ($temperatura >= 0 && $temperatura < 15) {
    $estadotemp = "Templado";
    $colortemp = "#22c55e";
} else {
    $estadotemp = "Agradable";
    $colortemp = "#f97316";
}

if ($cpu <= 50) {
    $estadoCpu = "Normal";
    $colorCpu = "#22c55e";
} elseif ($cpu <= 80) {
    $estadoCpu = "Advertencia";
    $colorCpu = "#facc15";
} else {
    $estadoCpu = "Crítico";
    $colorCpu = "#ef4444";
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Empresarial</title>

    <meta http-equiv="refresh" content="5">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg, #1e293b, #0f172a);
            min-height: 100vh;
            padding: 30px;
        }

        h1 {
            text-align: center;
            color: white;
            margin-bottom: 30px;
        }

        .dashboard {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .card {
            background: white;
            border-radius: 20px;
            padding: 25px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, .3);
            transition: .3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .titulo {
            color: #666;
            font-size: 18px;
            margin-bottom: 15px;
        }

        .valor {
            font-size: 32px;
            font-weight: bold;
        }

        .estado {
            margin-top: 10px;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <h1>📊 Dashboard Empresarial</h1>

    <div class="dashboard">

        <div class="card">
            <div class="titulo">🕒 Hora Actual</div>
            <div class="valor"><?= $hora ?></div>
        </div>

        <div class="card">
            <div class="titulo">🏢 Estado Empresa</div>

            <div class="valor" style="color:<?= $colorfondo ?>">
                <?= $empresa ?>
            </div>
        </div>

        <div class="card">
            <div class="titulo">🌡 Temperatura</div>

    
            <div class="estado" style="color:<?= $colortemp ?>">
                <?= $estadotemp ?>
            </div>
        </div>

        <div class="card">
            <div class="titulo">💻 Uso CPU</div>

            <div class="valor" style="color:<?= $colorCpu ?>">
                <?= $cpu ?>%
            </div>

            <div class="estado" style="color:<?= $colorCpu ?>">
                <?= $estadoCpu ?>
            </div>
        </div>

        <div class="card">
            <div class="titulo">👥 Usuarios Conectados</div>

            <div class="valor">
                <?= $usuarios ?>
            </div>
        </div>

    </div>

</body>

</html>