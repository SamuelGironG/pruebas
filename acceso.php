<?php

$mensaje = "";
$tipomensaje = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = trim($_POST["nombre"]);
    $edad = intval($_POST["edad"]);

    if (empty($nombre) && empty($edad)) {
        $mensaje = "Los espacios deben contener algun tipo de informacion";
        $tipomensaje = "danger";
    } elseif ($edad < 18) {
        $mensaje = "El usuario debe ser mayor de edad";
        $tipomensaje = "warning";
    } elseif ($edad >= 18 && $edad < 60) {
        $mensaje = "Acceso permitido";
        $tipomensaje = "success";
    } else {
        $mensaje = "Acceso preferencial";
        $tipomensaje = "success";
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
        }

        .contenedor {
            width: 600px;
            margin: 60px auto;
        }

        h3 {
            justify-content: center;
        }
    </style>
</head>

<body>
    <div class="contenedor container">
        <div class="card-header">
            <h3>Sistema de acceso</h3>
        </div>
        <form method="POST" class="form-control">
            <div class="card-body">
                <div>
                    <label class="label-form">Nombre:</label>
                    <input type="text" name="nombre" placeholder="Ingrese su nombre" class="form-control">
                </div>
                <div>
                    <label class="label-form">Edad:</label>
                    <input type="number" name="edad" placeholder="Ingrese su edad" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary mt-3">Verificar</button>
            </div>
        </form>
        <?php if (!empty($mensaje)) { ?>
            <div class="alert alert-<?= $tipomensaje ?>">
                <?=  $mensaje ?>
            </div>
        <?php } ?>
    </div>
</body>

</html>