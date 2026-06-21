<?php

$ciclo = time() %50;

if ($ciclo <20){
    $mensaje = "NO CRUZAR";
    $color = 'red';
    $segundoscambio = 20 - $ciclo;
}
elseif ($ciclo >= 20 && $ciclo <30) {
    $mensaje = "PREPAREZE";
    $color = 'yellow';
    $segundoscambio = 30 - $ciclo;
}
else {
    $mensaje = "PUEDE CRUZAR";
    $color = 'green';
    $segundoscambio = 50 - $ciclo;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta http-equiv="refresh" content="<?= $segundoscambio ?>">
    <style>
        body {
            background-color: white;
            justify-content: center;
            align-items: center;
            margin: 0;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            padding: 25px;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .circulo {
            width: 80px;
            height: 80px;
            margin: 12px 0;
            background: <? $color?>;
            border: 4px solid;
            transition: all 0.3s ease;
        }
        .red {
            background: red;
            box-shadow: 0 0 20px red;
        }
        .yellow {
            background: yellow;
            box-shadow: 0 0 20px yellow;
        }
        .green {
            background: green;
            box-shadow: 0 0 20px green;
        }
        .info {
            margin-top: 30px;
            font-size: 22px;
        }
    </style>
</head>
<body>
    <h1>Semaforo peatonal</h1>
    <div class="circulo <?= $color  ?>"></div>
    <div class="info">
        <p><strong>
            Estado: <?php echo $mensaje ?> 
        </strong></p>
        <p><strong>
            Cambio: <?php echo $segundoscambio ?>
        </strong></p>
    </div>
</body>
</html>
