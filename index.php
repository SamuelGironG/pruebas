<?php
date_default_timezone_set("America/Bogota");

$hora = date("H");

if ($hora >= 0 && $hora < 6 ) {
    $saludo = "Es de madrugada";
    $colorfondo = "#151014";
} 
elseif ($hora >= 6 && $hora < 12) {
    $saludo = "Es por la manana";
    $colorfondo = "#078aff";
}
elseif ($hora >= 12 && $hora < 18) {
    $saludo = "Es por la tarde";
    $colorfondo = "#efd463";
}
else {
    $saludo = "Es por la noche";
    $colorfondo = "#483156";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: <?php echo $colorfondo; ?>;
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .tarjeta {
            background-color: white;
            padding: 30px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="tarjeta">
        <h1><?php echo $saludo; ?> </h1>
        <p>Hora actual: <?php echo date('H:i:s'); ?></p>
        <p>Zona horario : America/Bogota</p>

    </div>
    
</body>
</html>