<?php 

    session_start();
    
    /**
     * Crear un fomulario de login (correo/contraseña)
     * validar que no este ningun campo vacio
     * validar que el correo sea: developerphp@test.test
     * y la contraseña 1234AbcD
     */

    if(empty($_POST['email']) || empty($_POST['password']) ){
            $_SESSION["mensajeError"] ="Datos incompletos, por favor verificar";  
            header("Location: login.php");  //Redireccionar
            return;
        }

    
     if($_POST['email']!= "developerphp@test.test" ||  $_POST['password'] != "1234AbcD" ){
                $_SESSION["mensajeError"] ="El correo y/o la contraseña son incorrectos ...";  
                header("Location: login.php");  //Redireccionar
                return;
     } 

     unset($_SESSION['msj']); //borrando la variable de sesion
     echo "Acceso permitido...";
        
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
                <h2> <?php echo $_POST['email'] ?>  </h2>
           </div>
           <div class="pie-form">
                <a href="#">Salir</a>
            </div>
        </div>
      
    </div>
 
</body>
</html>