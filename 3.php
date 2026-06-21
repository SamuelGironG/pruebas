<?php
date_default_timezone_set("America/Bogota");

$hora = date("H");
$horasestacionadas = 4;
if ($hora >= 6 && $hora <= 18){
    $tarifa = 4000;
    $jornada = "diurna";
}
else{
    $tarifa =6000;
    $jornada = "nocturna";
}

$total = $horasestacionadas * $tarifa;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, Helvetica, sans-serif;
            padding: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .tarjeta {
            background-color: white;
            padding: 15px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            width: 350px;
        }
        h2 {
            text-align: center;
        }
        p {
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="tarjeta">
        <h1>Tarifa parqueadero</h1>
        <p>Hora actual: <?php echo date("H:i:s") ?></p>
        <p>Jornada: <?php echo $jornada ?></p>
        <p>Tarifa: <?php echo $tarifa ?></p>
        <p>Total a pagar: <?php echo $total ?></p>
    </div>
    
</body>
</html>