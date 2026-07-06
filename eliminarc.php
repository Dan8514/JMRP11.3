<?php 
session_start();
if ( $_SESSION['tipo']==1){
$idcom = $_POST['id_com'];
    include 'conexi.php';
    $consulta2 = "DELETE FROM comentarios WHERE id_com='$idcom'";
    $result2 = mysqli_query($connection,$consulta2);
    echo "<script> window.history.go(-1);</script>";
}
else{
   echo "<script> window.location.href='index.php';</script>";
} 
?>