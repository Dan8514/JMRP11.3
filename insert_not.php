<?php 
include('connection.php');


$id_not = null;
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$id_cat = $_POST['id_cat'];
$fecha_not = $_POST['fecha_not'];
$hora_not = $_POST['hora_not'];
$fecha_creada = $_POST['fecha_creada'];
$foto1 = $_POST['foto1'];
$sql = "INSERT INTO noticias (descripcion, id_cat, foto1, fecha_not, hora_not, fecha_creada, titulo) VALUES( '$descripcion', '$id_cat', '$foto1', '$fecha_not', '$hora_not', '$fecha_creada', '$titulo')";

$query = mysqli_query($connection,$sql);

if($query){
    Header("location: crud-noticias.php");
};

?>

