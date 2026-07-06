<?php 
session_start();
if ( $_SESSION['tipo']==1){
$titulo = $_POST['idnot'];
    include 'conexi.php';
    $consulta2 = "DELETE FROM noticias WHERE id_not='$titulo'";
    $result2 = mysqli_query($connection,$consulta2);
    echo "<script> window.history.go(-1);</script>";
}
else{
   echo "<script> window.location.href='index.php';</script>";
} 
?>