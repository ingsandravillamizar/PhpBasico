<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <form action="envio.php" method="post">
        <p>Todos los campos son obligatorios</p>
        <p>
            <label for="destinario"> Destinatario:</label>
            <input type="email" name ="email" placeholder="Ingrese Email destianrio">
        </p>
       
        <p>
            <label for="Titulo"> Tiulo:</label>
            <input type="text" name ="title" placeholder="Titulo correo">
        </p>
       
        <p>
            <label for="Contenido"> Contenido:</label>
            <textarea name="content" id="" cols="30" rows="10"></textarea>
        </p>
       


        <button type="submit"> Enviar    </form>
</body>
</html>