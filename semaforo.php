<?php

$ciclo = time() %12;

if ($ciclo <5){
    $color = 'red';
    echo $color;
} elseif ($ciclo <7){
    $color = 'yellow';
    echo $color;
}else{
    $color = 'green';
    echo $color;
}

$segundosHastaCambio = 5 - ($ciclo % 5);
echo $segundosHastaCambio;
$segundosHastaCambio = max(1, 12 - ($ciclo % 12));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta http-equiv="refresh" content="<?= $segundosHastaCambio ?>">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
        }
        .semaforo {
            background-color: black;
            padding: 25px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
        }
        .luz {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin: 12px 0;
            background: #333;
            border: 4px solid #000000;
            transition: all 0.3s ease;
        }
        .red.active {
            background: red;
            box-shadow: 0 0 25px red;
        }
        .yellow.active {
            background: yellow;
            box-shadow: 0 0 25px yellow;
        }
        .green.active {
            background: green;
            box-shadow: 0 0 25px green;
        }
    </style>
</head>
<body>
    <div class="semaforo">
        <div class="luz red <?=  $color === 'red'? 'active': '' ?>">
        </div>
        <div class="luz yellow <?=  $color === 'yellow'? 'active': '' ?>">
        </div>
        <div class="luz green <?=  $color === 'green'? 'active': '' ?>">
        </div>

    </div>
</body>
</html>