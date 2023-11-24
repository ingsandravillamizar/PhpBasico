<?php
session_start();

 
$_SESSION["_array"] = array();  // Limpiar el array


header("Location: index.php");
return;
?>