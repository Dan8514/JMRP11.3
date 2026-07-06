<?php 
session_start();
if ( $_SESSION['tipo']==1){
$documento = $_POST['documento'];
    include 'conexi.php';
    $consulta2 = "DELETE FROM usuario WHERE id_usu='$documento'";
    $result2 = mysqli_query($connection,$consulta2);
    echo "<script> window.history.go(-1);</script>";
}
else{
   echo "<script> window.location.href='index.php';</script>";
} 
?>