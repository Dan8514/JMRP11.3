
<?php session_start();
 ?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>IE. JMRP</title>
    <link rel="icon" href="img/favicon.ico">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'><link rel="stylesheet" href="./style.css">
    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php include 'menu.php' ?>
<main>
    <div class="container-fluid py-1">
        <div class="container py-5">
     <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1 class="section-title position-relative text-center mb-5"></h1>
        
                </div>
            </div>
<div class="mlogin"><br><br>
<form class="login" method="post" action="conexion.php">
    <div class="m">Ingresar</div><br>
    <input type="text" name="usuario" id="usuario"  class="login-input" placeholder="USUARIO" required autofocus><div class="mm"><i class="fas fa-user" title="usuario"></i> </div>
   <input type="password" name="clave" id="clave" class="login-input" placeholder="CLAVE" requierd><div class="mm"><i class="fas fa-key" title="usuario"></i></div>
    <center><input type="submit" value="Iniciar" class="login-submit"></center>
    <p class="login-help"><a href="#">¿Olvido su Contraseña?</a></p>
    <button type="reset" id="limpiari" hidden=""></button>
 </form>
</div></div></div>
</main>

<?php include 'footer.php' ?>
<script>
    $(document).ready(function() {
        $("#limpiari").click();
        $("#formulario > input").html("");
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
        <script src="js/app.js">     </script>
</body>
</html>