<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Formulario de Acceso</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div id="contenedor">
        <div id="central">
            <div id="login">

                <div class="titulo">
                    Bienvenido
                </div>
   

                <form  action="home.php" method="post">
                    <input  type="email"    name="usuario"  placeholder="Usuario"     required>
                    <input  type="Password" name="password" placeholder="Contraseña"  required>
                    <button type="submit">Iniciar sesión</button>
                </form>
                
                
                <div class="pie-form">
                    <a href="#">¿Perdiste tu contraseña?</a>
                    <a href="#">¿No tienes Cuenta? Registrate</a>
                </div>
            </div>

            <div class="inferior">
                <a href="#">Volver</a>
            </div>

        </div>
    </div>
</body>
</html>