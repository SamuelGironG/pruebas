<?php

$lado= rand(1,6);

if ($lado == 1){
    $imagen = 'img/17114202-one-red-dice-with-the-number-one-on-all-sides.jpg';
    $mensaje = "El numero es 1";
}elseif ($lado ==2){
    $imagen =  'img/images (2).jpg';
    $mensaje = "El numero es 2";
}
elseif ($lado==3){
    $imagen =  'img/images (3).jpg';
    $mensaje = "El numero es 3";
}
elseif($lado==4){
    $imagen = 'img/images (4).jpg';
    $mensaje = "El numero es 4";
}
elseif($lado == 5){
    $imagen = 'img/images (5).jpg';
    $mensaje = "El numero es 5";
}
else{
    $imagen = 'img/images (6).jpg';
    $mensaje = "El numero es 6";
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dado Virtual</title>

    <style>

        body{
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card{
            background: white;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 0 15px gray;
        }

        img{
            width: 200px;
            height: 200px;
            object-fit: contain;
        }

        button{
            margin-top: 15px;
            padding: 10px 20px;
            border: none;
            background: #007bff;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover{
            background: #0056b3;
        }

    </style>

</head>
<body>

    <div class="card">

        <h1>Dado Virtual 🎲</h1>

        <h2>Resultado: <?php echo $mensaje; ?></h2>

        <img src="<?php echo $imagen; ?>" alt="Dado">

        <br>

        <form method="POST">
            <button type="submit">
                Lanzar dado
            </button>
        </form>

    </div>

</body>
</html>