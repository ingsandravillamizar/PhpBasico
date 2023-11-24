<?php
    session_start();
    if(!isset($_POST['min']) || $_POST['min'] == '' || !isset($_POST['max']) || $_POST['max'] == ''){
        $_SESSION['error'] = 'Datos incompletos, verifique...';
        header('Location: index.php');
        return;
    }

       
    if (!isset($_SESSION['_array'])) {
        $_SESSION['_array'] = array();
    }
    

    //crear variables
    $minimo = $_POST['min'];
    $maximo = $_POST['max'];



    $aleatorioNumber = rand($minimo, $maximo);
    if ( !in_array($aleatorioNumber, $_SESSION['_array'])) {
            array_push($_SESSION['_array'], $aleatorioNumber);
            $_SESSION['response'] = "Numero Aleatorio $aleatorioNumber";
        }  
    

    unset($_SESSION['error']);
    $_SESSION['_inicial'] = $minimo;
    $_SESSION['_final'] = $maximo;

    header("Location: index.php");
    return;