<?php

date_default_timezone_set("America/Bogota");


$hora = date("H");

if ($hora >= 9 && $hora <= 17){
    $mensaje = "Acceso permitido";
    $clase = "permitido";
} else {
    $mensaje = "Acceso denegado";
    $clase = "denegado";
}










?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        body{
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .tarjeta{
            width: 350px;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
            background-color: white;
        }

        .permitido{
            color: green;
            font-size: 30px;
            font-weight: bold;
        }

        .denegado{
            color: red;
            font-size: 30px;
            font-weight: bold;
        }

        p{
            font-size: 18px;
        }

    </style>
</head>
<body>
    <div class="tarjeta">
        <h1>Control de acceso</h1>
        <p>Hora actual: <?php echo date("H:i:s") ?></p>
        <p class="<?php echo $clase; ?>">
            <?php echo $mensaje; ?> 
        </p>
    </div>
</body>
</html>
