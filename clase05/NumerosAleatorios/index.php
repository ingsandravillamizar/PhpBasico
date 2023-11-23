<?php
    session_start();
    $title = "Generador de numeros aleatorios";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>
<body>
    <div class="container">
        <h1><?= $title ?></h1>
        <p>Genera tu primer numero</p>
        <a href="process.php">Generar ahora</a>
        <div>
            Resultado:
            <?php 
                if(!empty($_SESSION['number'])){
                    echo $_SESSION['number'];
                }
            ?>
        </div>
    </div>
</body>
</html>