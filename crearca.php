<?php
session_start();
if ( $_SESSION['tipo']==1){
include 'conexi.php';
$nombre = $_POST['nombre'];

   $query = "INSERT INTO categorias(nombre) VALUES('$nombre');";
    $resultado = mysqli_query($connection,$query);
    if(!empty($resultado)){
        echo "<script> window.location.href='crudcategorias.php';</script>";  
    }else{
        echo "<script> alert('No se guardó');</script>";
    }
    $connection -> close();
}
else{
echo "<script> window.location.href='index.php';</script>";
}  
?>