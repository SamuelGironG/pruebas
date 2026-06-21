<?php
date_default_timezone_set("America/Bogota");

$hora = date("H");
$hora = 9;
$descuento = "";

if ($hora >=9 && $hora <17) {
    $tema= "#140f07";
    $saludo = "Bienvenido";
    $estado = "Abierto";
    if ($hora <12) {
        $descuento = "30%";
    }
    else {
        $descuento = "15%";
    }
}
else {
    $tema = "#f8efed";
    $estado = "Cerrado";
    $saludo = "El negocio se encuentra cerrado";
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
            background-color: <?php echo $tema; ?>;
            justify-content: center;
            align-items: center;
            display: flex;
            padding: 40px;
            height: 100vh;
            font-family: 'Times New Roman', Times, serif;
        }
        .tarjeta {
            background: grey;
            box-shadow: rgba(0, 0, 0, 0.2);
            align-items: center;
            justify-content: center;
            width: 400px;
            border-radius: 20px;
        }     
        h1 {
            font-size: 24px;
            color: black;
        }
        p {
            font-size: 18px;
            color: blue;
        }
    </style>
</head>
<body>
    <div class="tarjeta">
        <h1>Negocio</h1>
        <p><?php echo $saludo ?></p>
        <p>Hora actual: <?php echo date("H:i:s") ?></p>
        <p>Fecha actual: <?php echo date("d:m:y") ?></p>
        <p>Estado del negocio: <?php echo $estado ?></p>
        <p>Descuento actual: <?php echo $descuento ?></p>
    </div>
</body>
</html>