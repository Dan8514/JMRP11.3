<?php
session_start();
if ( $_SESSION['tipo']==1){
include 'cone.php';
$activo=true;
$nombre = $_POST['nombre'];
$ape = $_POST['ape'];
$clave = $_POST['clave'];
$usuario = $_POST['usuario'];

$hash = password_hash($clave, PASSWORD_DEFAULT);

   $stmt = "INSERT INTO usuario(documento, nombre, ape, correo, whatsapp, usuario, password_hash, tipo, activo, foto, grado, grupo) 
    VALUES('$documento', '$nombre', '$ape', '$correo', '$whatsapp', '$usuario', '$hash', '$tipo', '$activo','$imgContenido', '$grado', '$grupo');";
    $resultado = mysqli_query($connection,$stmt);
    if(!empty($resultado)){
        require 'phpqrcode/qrlib.php';
        $stmt2 = "SELECT * FROM usuario ORDER BY rown DESC LIMIT 1";
        $resultado2 = mysqli_query($connection,$stmt2);
        while ($row2 = $resultado2->fetch_assoc()) {
            $ida = $row2["rown"];
            $id = (Int)$ida;
        }
        $stmt3="SELECT * FROM usuario WHERE rown = '$id'";
        $resultado3 = mysqli_query($connection,$stmt3);
        while ($row3 = $resultado3->fetch_assoc()) {
            $ida3 = $row3["documento"];
            $id2 = (Int)$ida3;
        }
        
        echo "<script> window.location.href='usuarios.php';</script>";  
    }else{
        echo "<script> alert('No se guardó');</script>";
    }
    $connection -> close();
}
else{
   echo "<script> window.location.href='index.php';</script>";
}  
?>