<?php 
session_start();
if ( $_SESSION['tipo']==1){
$idcat = $_POST['id_cat'];
    include 'conexi.php';
    $consulta2 = "DELETE FROM categorias WHERE id_cat='$idcat'";
    $result2 = mysqli_query($connection,$consulta2);
    echo "<script> window.history.go(-1);</script>";
}
else{
   echo "<script> window.location.href='index.php';</script>";
} 
?>