<?php 

    session_start(); 
    $inicial= 0 ;
    $final = 0;

    if(!empty($_SESSION["_inicial"])){
        $inicial = $_SESSION["_inicial"];
       
    }

    if(!empty($_SESSION["_final"])){
        $final = $_SESSION["_final"];
    }
                                    
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Aleatorios</title>

</head>
<body>
    

    <div class="container mt-5">
    <div class="row mt-5">
    <div class="col-6 offset-3">
    <div class = "card" >
        <div class="card-header">
            <h1>Números Aleatorios dentro de un Rango </h1>
        </div>
        <div class="card-body">
        <p class="badge rounded-pill text-bg-info text-white">Todos los campos son obligatorios...</p>
        </div>    
        <p>
                                <?php 
                                 
                                    if(!empty($_SESSION["error"])){
                                        echo "<div class='alert alert-danger'>
                                                <p>{$_SESSION['error']}</p>
                                            </div>";
                                        unset($_SESSION['error']);
                                    }

                                    

                                    if(!empty($_SESSION["response"])){
                                        echo "<div class='alert alert-success'>
                                                <p>{$_SESSION['response']}</p>
                                            </div>";
                                        unset($_SESSION['response']); //borro la variable de sesión
                                    }

                                    
                                
                                ?>
            </p>

         

            <form action="process.php" method="post" class="d-flex justify-content-around">
                                <div>
                                    <input type="number" name="min" class="form-control" placeholder="Número inicial para el Rango"  value=  <?php echo $inicial  ?> >
                                </div>
                        
                                <div>
                                    <input type="number" name="max" class="form-control" placeholder="Número final para el Rango"    value=  <?php echo   $final  ?> >
                                </div>
                                <button type="submit" class="btn btn-primary ms-3">Generar</button>
                               


                               


            </form>
            <div>
                        <?php 
                            if(isset($_SESSION["_array"]) && !empty($_SESSION["_array"])){
                                echo "<p>Números generados:</p>";
                                echo "<ul>";
                                foreach ($_SESSION["_array"] as $numero) {
                                    echo "<li>$numero</li>";
                                }
                                echo "</ul>";
                            }
                        ?>
                        
            </div>
            <form action="clear.php" method="post">
                    <button type="submit" class="btn btn-danger mt-3">Limpiar Array</button>
            </form>
    </div>
    </div>
    </div>
    </div>
    
</body>
</html>