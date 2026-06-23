<?php
$saldo = 1000000;
$retirar = "";
$tipomensaje="";
$mensaje = "";
$saldorestante = $saldo;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $retirar = $_POST['retirar'];

    if ($retirar < 0) {
        $mensaje = "El monto debe ser un valor positivo";
        $tipomensaje= "danger";
    } elseif ($retirar == 0) {
        $mensaje = 'El monto no puede ser cero (0)';
        $tipomensaje = "danger";
    } elseif ($retirar > $saldo) {
        $mensaje = "Saldo insuficiente";
        $tipomensaje = "danger";
    } else {
        $saldorestante = $saldo - $retirar;
        $mensaje = "Monto retirado con exito";
        $tipomensaje = "success";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card-header">
            <h3>Simulador de cajero automatico</h3>
        </div>
        <div class="card-body">
            <h5>Saldo disponible
                <span class="text-success">
                    $<?= number_format($saldo, 0, ",", ".") ?>
                </span>
            </h5>
            <form method="POST" class="form-control">
                <div class="mb-3">
                    <label class="form-label" >Cantidad a retirar</label>

                    <input type="number" name="retirar" class="form-control" placeholder="Ingrese monto a retirar" required>

                </div>
                <button type="submit" class="btn btn-info mt-3">Retirar</button>
            </form>
            <?php if($mensaje != ""){ ?>
                <div class="alert alert-<?= $tipomensaje ?>">
                    <?= $mensaje ?>
                </div>
            <?php } ?>
            <?php if($tipomensaje=="success"){ ?>
                <table class="table table-bordered mt-3">
                    <tr>
                        <th>Saldo inicial</th>
                        <td>$<?= number_format($saldo,0,",",".") ?></td>
                    </tr>
                    <tr>
                        <th>Valor retirado</th>
                        <td>$<?= number_format($retirar,0,",",".") ?></td>
                    </tr>
                    <tr class="table-success">
                        <th>Saldo restante</th>
                        <td><?= number_format($saldorestante,0,",",".") ?></td>
                    </tr>
                </table>
            <?php } ?>
        </div>

    </div>
</body>

</html>