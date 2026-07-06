<?php
session_start();
    $id=$_POST['id'];
    $correo = $_POST['correo'];
    $whatsapp = $_POST['whatsapp'];
    $im=$_FILES['image']['tmp_name'];
    if ( $_SESSION['tipo']==1 || $_SESSION['tipo']==2 ){
     include 'conexi.php' ;

    if(filesize($im)>0){
            $revisar = getimagesize($_FILES["image"]["tmp_name"]);
            if($revisar !== false){
                $image = $_FILES['image']['tmp_name'];
                $imgContenido = addslashes(file_get_contents($image));
                $stmt = "UPDATE usuario SET correo='$correo', whatsapp='$whatsapp', foto='$imgContenido'WHERE documento='$id'";
            } 
    } else{    $stmt = "UPDATE usuario SET correo='$correo', whatsapp='$whatsapp' WHERE documento='$id'";
        }
        $resultado = mysqli_query($connection,$stmt);
        $connection -> close();  
        if(!empty($resultado)){
            echo "<script>window.history.go(-1);</script>";
        }else{
                echo "<script> alert('No se guardaron los cambios'); window.history.go(-1);</script>";
        }
    }else{
        echo "<script> alert('Usuario no autorizado.');window.history.go(-2);</script>";
    }
    $connection -> close();
?>