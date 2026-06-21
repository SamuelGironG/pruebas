<?php


$imc = null;


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    if (!empty($peso) && !empty($altura) && $altura > 0) {

        $imc = $peso / ($altura * $altura);

        if ($imc < 18.5) {
            $estado = "Bajo peso";
            $color = "#60a5fa";
        }
         elseif ($imc < 25) {
            $estado = "Normal";
            $color = "#22c55e";
        } elseif ($imc < 30) {
            $estado = "Sobrepeso";
            $color = "#f59e0b";
        } else {
            $estado = "Obesidad";
            $color = "#ef4444";
        }
    }    
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IMC</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:Arial, Helvetica, sans-serif;
            background:linear-gradient(135deg,#4f46e5,#7c3aed);
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .card{
            width:400px;
            background:white;
            padding:30px;
            border-radius:20px;
            box-shadow:0 10px 30px rgba(0,0,0,.2);
        }

        h1{
            text-align:center;
            margin-bottom:20px;
            color:#333;
        }

        label{
            display:block;
            margin-top:15px;
            margin-bottom:5px;
            font-weight:bold;
        }

        input{
            width:100%;
            padding:12px;
            border:1px solid #ccc;
            border-radius:10px;
            font-size:16px;
        }

        button{
            width:100%;
            margin-top:20px;
            padding:12px;
            border:none;
            border-radius:10px;
            background:#4f46e5;
            color:white;
            font-size:16px;
            cursor:pointer;
        }

        button:hover{
            opacity:0.9;
        }

        .resultado{
            margin-top:25px;
            padding:20px;
            border-radius:15px;
            text-align:center;
            color:white;
        }

        .resultado h2{
            margin-bottom:10px;
        }

    </style>
</head>
<body>

    <div class="card">

        <h1>🏥 Calculadora IMC</h1>

        <form method="POST">

            <label>Peso (kg)</label>
            <input
                type="number"
                step="0.1"
                name="peso"
                required
            >

            <label>Altura (m)</label>
            <input
                type="number"
                step="0.01"
                name="altura"
                required
            >

            <button type="submit">
                Calcular IMC
            </button>

        </form>

        <?php if ($imc !== null): ?>

            <div class="resultado" style="background: <?= $color ?>;">
                <h2>
                    IMC: <?= number_format($imc,2) ?>
                </h2>

                <h3>
                    <?= $estado ?>
                </h3>

            </div>

        <?php endif; ?>

    </div>

</body>
</html>