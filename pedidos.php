<?php
$estado = rand(1, 4);

if ($estado == 1) {
    $mensaje = "Pedido recibido";
    $imagen = 'img/young-adult-waiter-taking-order-260nw-2772738075 (1).webp';
    $color = 'blue';
} elseif ($estado == 2) {
    $mensaje = "Pedido en preparacion";
    $imagen = 'img/images.jpg';
    $color = 'green';
} elseif ($estado == 3) {
    $mensaje = "Pedido en camino";
    $imagen = 'img/food-delivery-moto-scooter-driver-260nw-1730162416.webp';
    $color = 'red';
} else {
    $mensaje = "Pedido entregado";
    $imagen = 'img/happy-woman-delivery-man-package-260nw-2304125563.webp';
    $color = 'yellow';
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
            background-color: white;
            justify-content: center;
            align-items: center;
            display: flex;
            flex-direction: column;
            margin: 0;
            padding: 25px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        .card {
            background-color: <?= $color ?>;
            width: 500px;
            min-height: 450px;
            margin: auto;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 10px gray;
            text-align: center;
        }

        img {
            width: 200px;
            height: 200px;
            object-fit: contain;
        }

        h1 {
            color: <?php echo $color; ?>;
        }

        button {
            padding: 10px 20px;
            border: none;
            background: #007bff;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #0056b3;
        }
    </style>
</head>

<body>
    <h1>Estado del pedido</h1>
    <div class="card">
        <h2><?php echo $mensaje ?></h2>
        <p><?php echo $estado ?></p>
        <img src="<?php echo $imagen ?>"></img>
        <br><br>
        <form method="POST">
            <button type="submit">Generar nuevo estado</button>
        </form>
    </div>
</body>

</html>