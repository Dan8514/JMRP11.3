<?php
session_start();
if ( $_SESSION['tipo']==1){
include 'conexi.php' ;
$descri = $_POST['descripcion'];
$idcat = $_POST['id_cat'];
 $stmt = "UPDATE categorias SET nombre='$nombre' WHERE id_cat='$idcat'";
    $resultado = mysqli_query($connection,$stmt);
    if(!empty($resultado)){
   
        $connection -> close();
        echo "<script> window.history.go(-1); </script>";
    }else{
        echo "<script> alert('No se guardaron los cambios');window.history.go(-1);</script>";
    }
}
else{
   echo "<script>alert('Usuario no autorizado'); window.location.href='index.php';</script>";
}  
?>