<?php
session_start();
if ( $_SESSION['tipo']==1){
include 'conexi.php';
$aprobado=false;
$archivado=false;
$comentario = $_POST['comentario'];
$idnot = $_POST['id_not'];
$fechan = new DateTime('now', new DateTimeZone('America/Bogota'));
$fecha = $fechan->format('Y-m-d H:i:s');
$usuario = $_SESSION['id_usu'];
$revisar = getimagesize($_FILES["image"]["tmp_name"]);
if($revisar !== false){
    $image = $_FILES['image']['tmp_name'];
    $imgContenido = addslashes(file_get_contents($image));

}else{
    echo "<script> alert('Imagen no válida');</script>";
}
   $query = "INSERT INTO comentarios(descripcion, fecha, id_usu, id_not, foto, aprobado, archivado)     VALUES('$comentario', '$fecha', '$usuario', '$idnot','$imgContenido', '$aprobado', '$archivado');";
 $resultado = mysqli_query($connection,$query);
    if(!empty($resultado)){
        echo "<script> window.location.href='noticias.php';</script>"; 
    }else{
        echo "<script> alert('No se guardó');window.history.go(-1);</script>";
    }
    $connection -> close();
}
else{
echo "<script> alert('No tiene autorización para crear comentarios');window.location.href='noticias.php';</script>";
}  
?>