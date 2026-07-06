<?php
session_start();
if ( $_SESSION['tipo']==1){
include 'conexi.php' ;
$descri = $_POST['descripcion'];
$fecha = $_POST['fecha'];
$idcom = $_POST['id_com'];
$idnot = $_POST['idnot'];
$usu = $_POST['usu'];
$arch = $_POST['arch'];
$apro = $_POST['aprobado'];
$im=$_FILES['image']['tmp_name'];
if(filesize($im)>0){
    $revisar = getimagesize($_FILES["image"]["tmp_name"]);
    if($revisar !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContenido = addslashes(file_get_contents($image));
        $stmt = "UPDATE comentarios SET descripcion='$descri', fecha='$fecha', id_not='$idnot', id_usu='$usu', archivado='$arch', aprobado='$apro', foto='$imgContenido' WHERE id_com='$idcom'";
    }else{
        echo "<script> alert('Imagen no válida');</script>";
    }}else{            $stmt = "UPDATE comentarios SET descripcion='$descri', fecha='$fecha', id_not='$idnot', id_usu='$usu', archivado='$arch', aprobado='$apro' WHERE id_com='$idcom'";
}

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