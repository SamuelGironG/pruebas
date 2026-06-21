<?php

$nota = rand(0,100);

if ($nota >= 90){
    $mensaje = "Excelente";
}
elseif($nota <90 && $nota >=80){
    $mensaje = "Bueno";
}
elseif ($nota < 80 && $nota >= 70) {
    $mensaje = "Aprobado";
} 
else {
    $mensaje = "Rebrobado";
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Calificación</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(135deg,#667eea,#764ba2);
    font-family:'Segoe UI',sans-serif;
}

.card{
    width:350px;
    background:white;
    padding:35px;
    border-radius:25px;
    text-align:center;
    box-shadow:0 15px 40px rgba(0,0,0,.25);
}

.titulo{
    color:#333;
    margin-bottom:25px;
}

.nota{
    width:120px;
    height:120px;
    margin:auto;
    border-radius:50%;
    background:<?= $color ?>;
    color:black;
    font-size:40px;
    font-weight:bold;
    display:flex;
    justify-content:center;
    align-items:center;
    box-shadow:0 0 25px <?= $color ?>;
}

.resultado{
    margin-top:25px;
    font-size:28px;
    color:<?= $color ?>;
    font-weight:bold;
}

.emoji{
    font-size:55px;
    margin-top:15px;
}

.texto{
    margin-top:15px;
    color:#666;
    font-size:16px;
}

button{
    margin-top:25px;
    border:none;
    background:<?= $color ?>;
    color:white;
    padding:12px 25px;
    border-radius:10px;
    cursor:pointer;
    font-size:16px;
}

button:hover{
    opacity:.9;
}

</style>
</head>
<body>

<div class="card">

    <h1 class="titulo">📚 Resultado Académico</h1>

    <div class="nota">
        <?= $nota ?>
    </div>

    <div class="resultado">
        <?= $mensaje ?>
    </div>

    <p class="texto">
        Esta es la evaluación obtenida en la prueba.
    </p>

    <button onclick="location.reload()">
        Generar otra nota
    </button>

</div>

</body>
</html>