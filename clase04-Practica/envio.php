<?php
 if(!empty($_POST['email']) &&  !empty($_POST['title']) && !empty($_POST['content']) ){
    echo "Destinatario:". $_POST['email']  . "<br>";
    echo "Titulo:".  $_POST['title'] . "<br>";
    echo "Contenido:". $_POST['content']. "<br>";
}else{
    //redireccionar a home

    header("Location: home.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_POST['email']</title>
</head>
<body>
    
</body>
</html>

 