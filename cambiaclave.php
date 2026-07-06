<?php
session_start();
    $id=$_POST['id'];
    $clave = $_POST['clave'];
    $nueva = $_POST['nueva'];
    $nueva2 = $_POST['nueva2'];

     if(password_verify($clave, $clave2)){

        
    if ($nueva !== $nueva){
    echo "<script>alert('Las contraseñas no coinciden');window.history.go(-1);</script>";
    exit();
}
    $stmt = "UPDATE usuario SET password_hash='$nueva' 'WHERE documento='$id'";
           


        $resultado = mysqli_query($connection,$stmt);
        $connection -> close();  
        if(!empty($resultado)){
            echo "<script>window.history.go(-1);</script>";
        }else{
                echo "<script> alert('No se guardaron los cambios'); window.history.go(-1);</script>";
        }
    }else{ echo "<script> alert('Usuario no autorizado.');window.history.go(-2);</script>";
    }
    $connection -> close();
?>