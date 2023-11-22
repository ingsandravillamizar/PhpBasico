<?php 
    /**
     * Crear un fomulario de login (correo/contraseña)
     * validar que no este ningun campo vacio
     * validar que el correo sea: developerphp@test.test
     * y la contraseña 1234AbcD
     */

    if(empty($_POST['usuario']) || empty($_POST['password']) ){  
            header("Location: login.php");  //Redireccionar
        }

    
     if($_POST['usuario']!= "developerphp@test.test" ||  $_POST['password'] != "1234AbcD" ){
        header("Location: login.php");  //Redireccionar
     } 
        
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Empresarial XXX </title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div id="contenedor">
        <div id="central">
            <div id="login">
                <div class="titulo">
                    Bienvenido
                </div>
                <h2> <?php echo $_POST['usuario'] ?>  </h2>
           </div>
           <div class="pie-form">
                <a href="#">Salir</a>
            </div>
        </div>
      
    </div>
 
</body>
</html>