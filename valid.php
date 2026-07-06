<?php 
$usuario=$_POST["usu"];
$clave=$_POST["clave"];
if($usuario==''){
    echo "<script> alert('Falta ingresar usuario');window.location.href='inisesion.php';</script>";
}
elseif($clave==''){
    echo "<script> alert('Falta ingresar la contraseña');window.location.href='inisesion.php';</script>";
}
else{
    include 'conexi.php';
    $consulta = "SELECT * FROM usuario WHERE usuario ='$usuario' AND clave ='$clave'";
    $resultado = mysqli_query($conexion,$consulta);
if($resultado){
    while($row=mysqli_fetch_assoc($result)){
        $usu2= $row["usuario"];
        $clave2= $row["clave"]; 
        $nom= $row["nombre"];
        $tipo= $row["tipo"];
      }
      if($usuario==$usu2){
        session_start();
        $_SESSION['nom']=$nom;   
        $_SESSION['tipo']=$tipo; 
        $conexion->close();
        echo "<script>window.location.href='acceso1.php';</script>";
       }
       else{
        echo "<script> alert('Usuario no válido');window.location.href='inisesion.php';</script>";
       }
}
else{
    echo "<script> alert('Nose pudo conectar a la BD');window.location.href='inisesion.php';</script>";
}
}