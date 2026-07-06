<?php session_start();
if(!$_SESSION){
 $_SESSION["tipo"]=0;}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>IE. JMRP</title>
    <link rel="icon" href="img/favicon.ico">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Institución Educativa" name="keywords">
    <meta content="La Jose en Red" name="description">
    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'><link rel="stylesheet" href="./style.css">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <?php include 'menu.php'; ?> 
    <br>
    <div class="marconosotros">
             <center>  <img src="img/logosf.png"><br><div class="w2"><i>Construyendo Tejido Social</i></div></center> <br>
    <div class="row">
        <div class="col-md-3 col-lg-3 col-sm-12">
            <div class="cuadradito2">
                <div class="integrantes">
                Daniel Villa Saldarriaga<br></br>
                    <img src="img/villa.png"><br>
                </div>
            </div>
        </div>
            <div class="col-md-3 col-lg-3 col-sm-12">
                <div class="cuadradito2">
                    <div class="integrantes">
                Mariana Durán Gutiérrez<br></br>
                    <img src="img/duran.png"><br>
                    </div>
                </div>
            </div>
                <div class="col-md-3 col-lg-3 col-sm-12">
                <div class="cuadradito2">
                    <div class="integrantes">
                Isabel Cristina<br> Hoyos<br></br>
                    <img src="img/cris.png"><br>
                    </div>
                </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-12">
                <div class="cuadradito2">
                    <div class="integrantes">
                Simón<br> Estrada<br></br>
                    <img src="img/simon.png"><br>
                    </div>
                </div>
                </div>
    </div><br><br></div>
    <br> <?php include 'footer.php'; ?> 
        </body>
</html>