<?php session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8">
    <title>IE. JMRP</title>
    <link rel="icon" href="img/favicon.ico">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="JMRP" name="keywords">
    <meta content="Institución Educativa" name="description">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body> 
    <?php include 'menu.php' ?>
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-3">
            <h1 class="text-white display-3 mt-lg-3">Galeria</h1>
            <div class="d-inline-flex align-items-center text-white">
                <h3 class="m-0">Eventos</h3>
                <h2 class="m-0"><i class="fa fa-images px-3"></i></h2>
               <h3 class="m-0">Momentos memorables</h3> 
            </div>
        </div>
    </div>
    <div class="container-fluid py-1 px-0">
        <div class="container py-1">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <h1 class="section-title position-relative text-center mb-5">Recordemos nuestros mejores momentos</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-4 pb-2" id="portfolio-flters">
                        <li class="btn btn-sm btn-outline-primary m-1 active" data-filter="*">Todo</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".zero">Jardín</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".first">Primaria</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".second">Secundaria</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".third">Media</li>
                          <li class="btn btn-sm btn-outline-primary m-1" data-filter=".twelve">Profundización</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".forth">Técnicas</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".fifth">Proyectos</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".sixth">Infraestructura</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".tenth">Democracia</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".seventh">Grados</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".eigth">Nocturna</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".nineth">Postales</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".eleventh">Historia</li>
                    </ul>
                </div>
            </div>
            <div class="row m-0 portfolio-container">
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item zero">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/jardin/1.jpg" alt="Jardín">
                        <a class="portfolio-btn" href="img/jardin/1.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item zero">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/jardin/2.jpg" alt="Jardín">
                        <a class="portfolio-btn" href="img/jardin/2.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item zero">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/jardin/3.jpg" alt="Jardín">
                        <a class="portfolio-btn" href="img/jardin/3.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/1.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/1.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/2.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/2.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/3.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/3.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/4.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/4.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/5.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/5.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/6.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/6.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/7.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/7.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/8.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/8.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/9.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/9.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/10.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/10.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/11.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/11.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/12.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/12.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/13.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/13.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/14.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/14.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/15.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/15.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/60.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/60.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/61.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/61.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/62.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/62.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/63.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/63.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/64.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/64.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/65.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/65.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/66.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/66.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/67.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/67.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/68.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/68.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/69.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/69.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/70.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/70.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/71.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/71.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/72.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/72.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/73.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/73.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/74.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/74.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/75.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/75.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/76.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/76.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/77.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/77.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/78.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/78.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/79.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/79.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/80.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/80.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/81.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/81.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/82.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/82.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/83.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/83.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/84.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/84.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/primaria/85.jpg" alt="Primaria">
                        <a class="portfolio-btn" href="img/primaria/85.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item second">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/secundaria/1.jpg" alt="Secundaria">
                        <a class="portfolio-btn" href="img/secundaria/1.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item second">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/secundaria/2.jpg" alt="Secundaria">
                        <a class="portfolio-btn" href="img/secundaria/2.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item second">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/secundaria/3.jpg" alt="Secundaria">
                        <a class="portfolio-btn" href="img/secundaria/3.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item second">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/secundaria/4.jpg" alt="Secundaria">
                        <a class="portfolio-btn" href="img/secundaria/4.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item second">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/secundaria/5.jpg" alt="Secundaria">
                        <a class="portfolio-btn" href="img/secundaria/5.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item second">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/secundaria/6.jpg" alt="Secundaria">
                        <a class="portfolio-btn" href="img/secundaria/6.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item second">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/secundaria/7.jpg" alt="Secundaria">
                        <a class="portfolio-btn" href="img/secundaria/7.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item second">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/secundaria/8.jpg" alt="Secundaria">
                        <a class="portfolio-btn" href="img/secundaria/8.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item second">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/secundaria/9.jpg" alt="Secundaria">
                        <a class="portfolio-btn" href="img/secundaria/9.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item second">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/secundaria/10.jpg" alt="Secundaria">
                        <a class="portfolio-btn" href="img/secundaria/10.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item second">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/secundaria/11.jpg" alt="Secundaria">
                        <a class="portfolio-btn" href="img/secundaria/11.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item second">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/secundaria/12.jpg" alt="Secundaria">
                        <a class="portfolio-btn" href="img/secundaria/12.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item second">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/secundaria/13.jpg" alt="Secundaria">
                        <a class="portfolio-btn" href="img/secundaria/13.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item second">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/secundaria/14.jpg" alt="Secundaria">
                        <a class="portfolio-btn" href="img/secundaria/14.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item second">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/secundaria/15.jpg" alt="Secundaria">
                        <a class="portfolio-btn" href="img/secundaria/15.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item third">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/media/1.jpg" alt="Media">
                        <a class="portfolio-btn" href="img/media/1.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item third">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/media/2.jpg" alt="Media">
                        <a class="portfolio-btn" href="img/media/2.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item third">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/media/3.jpg" alt="Media">
                        <a class="portfolio-btn" href="img/media/3.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item third">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/media/4.jpg" alt="Media">
                        <a class="portfolio-btn" href="img/media/4.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item third">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/media/5.jpg" alt="Media">
                        <a class="portfolio-btn" href="img/media/5.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item third">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/media/6.jpg" alt="Media">
                        <a class="portfolio-btn" href="img/media/6.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item third">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/media/7.jpg" alt="Media">
                        <a class="portfolio-btn" href="img/media/7.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item third">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/media/8.jpg" alt="Media">
                        <a class="portfolio-btn" href="img/media/8.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item third">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/media/9.jpg" alt="Media">
                        <a class="portfolio-btn" href="img/media/9.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item third">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/media/10.jpg" alt="Media">
                        <a class="portfolio-btn" href="img/media/10.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item third">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/media/11.jpg" alt="Media">
                        <a class="portfolio-btn" href="img/media/11.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item twelve">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/profu/1.jpg" alt="Profu">
                        <a class="portfolio-btn" href="img/profu/1.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item forth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/tecnica/1.jpg" alt="Técnicas">
                        <a class="portfolio-btn" href="img/tecnica/1.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item forth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/tecnica/2.jpg" alt="Técnicas">
                        <a class="portfolio-btn" href="img/tecnica/2.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item forth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/tecnica/3.jpg" alt="Técnicas">
                        <a class="portfolio-btn" href="img/tecnica/3.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item forth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/tecnica/4.jpg" alt="Técnicas">
                        <a class="portfolio-btn" href="img/tecnica/4.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item forth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/tecnica/5.jpg" alt="Técnicas">
                        <a class="portfolio-btn" href="img/tecnica/5.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item forth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/tecnica/6.jpg" alt="Técnicas">
                        <a class="portfolio-btn" href="img/tecnica/6.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/1.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/1.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/2.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/2.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/3.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/3.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/4.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/4.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/5.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/5.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/6.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/6.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/7.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/7.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/8.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/8.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/9.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/9.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/10.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/10.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/11.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/11.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/12.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/12.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/13.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/13.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/14.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/14.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/15.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/15.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/16.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/16.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/17.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/17.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/18.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/18.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/19.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/19.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/20.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/20.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/21.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/21.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/22.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/22.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/23.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/23.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/24.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/24.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/25.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/25.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/26.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/26.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/27.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/27.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/28.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/28.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/29.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/29.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/30.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/30.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/31.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/31.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/32.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/32.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/33.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/33.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/34.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/34.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/35.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/35.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/36.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/36.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/37.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/37.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/38.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/38.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/39.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/39.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/40.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/40.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/41.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/41.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/42.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/42.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/43.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/43.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/44.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/44.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/01.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/01.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/02.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/02.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/03.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/03.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/04.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/04.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/05.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/05.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/06.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/06.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/07.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/07.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/08.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/08.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/09.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/09.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/010.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/010.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/011.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/011.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/45.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/45.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/46.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/46.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/47.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/47.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/48.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/48.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/49.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/49.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/proyectos/50.jpg" alt="Proyectos">
                        <a class="portfolio-btn" href="img/proyectos/50.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/2.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/2.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/3.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/3.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/4.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/4.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/5.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/5.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/6.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/6.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/7.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/7.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/8.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/8.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/9.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/9.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/10.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/10.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/11.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/11.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/12.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/12.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/13.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/13.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/14.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/14.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/15.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/15.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/16.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/16.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/17.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/17.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/18.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/18.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/20.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/20.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/21.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/21.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/22.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/22.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/25.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/25.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/26.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/26.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/27.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/27.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/28.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/28.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/29.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/29.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/30.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/30.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/31.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/31.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/2.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/32.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/33.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/33.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/34.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/34.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/35.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/35.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/36.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/36.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/38.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/38.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/39.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/39.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/40.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/40.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/41.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/41.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/42.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/42.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/43.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/43.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/44.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/44.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/45.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/45.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/46.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/46.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/47.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/47.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                    <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/48.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/48.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                    <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/49.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/49.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                    <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/infraestructura/50.jpg" alt="Infraestructura">
                        <a class="portfolio-btn" href="img/infraestructura/50.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item seventh">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/grados/1.jpg" alt="Grados">
                        <a class="portfolio-btn" href="img/grados/1.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item seventh">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/grados/2.jpg" alt="Grados">
                        <a class="portfolio-btn" href="img/grados/2.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item seventh">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/grados/3.jpg" alt="Grados">
                        <a class="portfolio-btn" href="img/grados/3.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item seventh">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/grados/4.jpg" alt="Grados">
                        <a class="portfolio-btn" href="img/grados/4.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item seventh">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/grados/5.jpg" alt="Grados">
                        <a class="portfolio-btn" href="img/grados/5.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item seventh">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/grados/6.jpg" alt="Grados">
                        <a class="portfolio-btn" href="img/grados/6.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item seventh">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/grados/7.jpg" alt="Grados">
                        <a class="portfolio-btn" href="img/grados/7.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item seventh">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/grados/8.jpg" alt="Grados">
                        <a class="portfolio-btn" href="img/grados/8.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item seventh">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/grados/10.jpg" alt="Grados">
                        <a class="portfolio-btn" href="img/grados/10.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item seventh">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/grados/11.jpg" alt="Grados">
                        <a class="portfolio-btn" href="img/grados/11.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item seventh">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/grados/12.jpg" alt="Grados">
                        <a class="portfolio-btn" href="img/grados/12.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item seventh">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/grados/13.jpg" alt="Grados">
                        <a class="portfolio-btn" href="img/grados/13.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item seventh">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/grados/14.jpg" alt="Grados">
                        <a class="portfolio-btn" href="img/grados/14.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item seventh">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/grados/15.jpg" alt="Grados">
                        <a class="portfolio-btn" href="img/grados/15.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item seventh">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/grados/16.jpg" alt="Grados">
                        <a class="portfolio-btn" href="img/grados/16.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item seventh">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/grados/17.jpg" alt="Grados">
                        <a class="portfolio-btn" href="img/grados/17.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item seventh">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/grados/18.jpg" alt="Grados">
                        <a class="portfolio-btn" href="img/grados/18.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item seventh">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/grados/19.jpg" alt="Grados">
                        <a class="portfolio-btn" href="img/grados/19.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item seventh">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/grados/20.jpg" alt="Grados">
                        <a class="portfolio-btn" href="img/grados/20.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item eigth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/nocturna/1.jpg" alt="Nocturna">
                        <a class="portfolio-btn" href="img/nocturna/1.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item eigth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/nocturna/2.jpg" alt="Nocturna">
                        <a class="portfolio-btn" href="img/nocturna/2.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item eigth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/nocturna/3.jpg" alt="Nocturna">
                        <a class="portfolio-btn" href="img/nocturna/3.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item eigth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/nocturna/4.jpg" alt="Nocturna">
                        <a class="portfolio-btn" href="img/nocturna/4.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item eigth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/nocturna/5.jpg" alt="Nocturna">
                        <a class="portfolio-btn" href="img/nocturna/5.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item eigth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/nocturna/6.jpg" alt="Nocturna">
                        <a class="portfolio-btn" href="img/nocturna/6.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item eigth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/nocturna/7.jpg" alt="Nocturna">
                        <a class="portfolio-btn" href="img/nocturna/7.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item eigth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/nocturna/8.jpg" alt="Nocturna">
                        <a class="portfolio-btn" href="img/nocturna/8.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item eigth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/nocturna/9.jpg" alt="Nocturna">
                        <a class="portfolio-btn" href="img/nocturna/9.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item nineth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/paisajes/1.jpg" alt="Postales">
                        <a class="portfolio-btn" href="img/paisajes/1.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item nineth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/paisajes/1a.jpg" alt="Postales">
                        <a class="portfolio-btn" href="img/paisajes/1a.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item nineth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/paisajes/2.jpg" alt="Postales">
                        <a class="portfolio-btn" href="img/paisajes/2.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item nineth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/paisajes/3.jpg" alt="Postales">
                        <a class="portfolio-btn" href="img/paisajes/3.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item nineth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/paisajes/4.jpg" alt="Postales">
                        <a class="portfolio-btn" href="img/paisajes/4.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item nineth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/paisajes/9.jpg" alt="Postales">
                        <a class="portfolio-btn" href="img/paisajes/9.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item nineth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/paisajes/11.jpg" alt="Postales">
                        <a class="portfolio-btn" href="img/paisajes/11.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item nineth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/paisajes/10.jpg" alt="Postales">
                        <a class="portfolio-btn" href="img/paisajes/10.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item nineth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/paisajes/12.jpg" alt="Postales">
                        <a class="portfolio-btn" href="img/paisajes/12.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item nineth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/paisajes/13.jpg" alt="Postales">
                        <a class="portfolio-btn" href="img/paisajes/13.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item nineth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/paisajes/14.jpg" alt="Postales">
                        <a class="portfolio-btn" href="img/paisajes/14.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item nineth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/paisajes/15.jpg" alt="Postales">
                        <a class="portfolio-btn" href="img/paisajes/15.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item nineth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/paisajes/16.jpg" alt="Postales">
                        <a class="portfolio-btn" href="img/paisajes/16.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item nineth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/paisajes/17.jpg" alt="Postales">
                        <a class="portfolio-btn" href="img/paisajes/17.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item nineth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/paisajes/18.jpg" alt="Postales">
                        <a class="portfolio-btn" href="img/paisajes/18.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item nineth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/paisajes/19.jpg" alt="Postales">
                        <a class="portfolio-btn" href="img/paisajes/19.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item nineth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/paisajes/20.jpg" alt="Postales">
                        <a class="portfolio-btn" href="img/paisajes/20.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 p-0 portfolio-item nineth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/paisajes/21.jpg" alt="Postales">
                        <a class="portfolio-btn" href="img/paisajes/21.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item nineth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/paisajes/43.jpg" alt="Postales">
                        <a class="portfolio-btn" href="img/paisajes/43.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                   <div class="col-lg-4 col-md-6 p-0 portfolio-item nineth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/paisajes/44.jpg" alt="Postales">
                        <a class="portfolio-btn" href="img/paisajes/44.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item nineth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/paisajes/37.jpg" alt="Postales">
                        <a class="portfolio-btn" href="img/paisajes/37.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item nineth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/paisajes/42.jpg" alt="Postales">
                        <a class="portfolio-btn" href="img/paisajes/42.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item nineth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/paisajes/5.jpg" alt="Postales">
                        <a class="portfolio-btn" href="img/paisajes/5.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item tenth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/democracia/1.jpg" alt="Democracia">
                        <a class="portfolio-btn" href="img/democracia/1.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item tenth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/democracia/2.jpg" alt="Democracia">
                        <a class="portfolio-btn" href="img/democracia/2.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item tenth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/democracia/3.jpg" alt="Democracia">
                        <a class="portfolio-btn" href="img/democracia/3.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item tenth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/democracia/4.jpg" alt="Democracia">
                        <a class="portfolio-btn" href="img/democracia/4.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item tenth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/democracia/5.jpg" alt="Democracia">
                        <a class="portfolio-btn" href="img/democracia/5.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item tenth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/democracia/6.jpg" alt="Democracia">
                        <a class="portfolio-btn" href="img/democracia/6.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item tenth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/democracia/7.jpg" alt="Democracia">
                        <a class="portfolio-btn" href="img/democracia/7.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item tenth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/democracia/8.jpg" alt="Democracia">
                        <a class="portfolio-btn" href="img/democracia/8.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item tenth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/democracia/9.jpg" alt="Democracia">
                        <a class="portfolio-btn" href="img/democracia/9.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item tenth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/democracia/10.jpg" alt="Democracia">
                        <a class="portfolio-btn" href="img/democracia/10.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item tenth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/democracia/11.jpg" alt="Democracia">
                        <a class="portfolio-btn" href="img/democracia/11.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item tenth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/democracia/12.jpg" alt="Democracia">
                        <a class="portfolio-btn" href="img/democracia/12.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item tenth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/democracia/13.jpg" alt="Democracia">
                        <a class="portfolio-btn" href="img/democracia/13.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item tenth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/democracia/14.jpg" alt="Democracia">
                        <a class="portfolio-btn" href="img/democracia/14.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item tenth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/democracia/15.jpg" alt="Democracia">
                        <a class="portfolio-btn" href="img/democracia/15.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item tenth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/democracia/16.jpg" alt="Democracia">
                        <a class="portfolio-btn" href="img/democracia/16.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item tenth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/democracia/17.jpg" alt="Democracia">
                        <a class="portfolio-btn" href="img/democracia/17.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item tenth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/democracia/18.jpg" alt="Democracia">
                        <a class="portfolio-btn" href="img/democracia/18.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item tenth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/democracia/19.jpg" alt="Democracia">
                        <a class="portfolio-btn" href="img/democracia/19.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item tenth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/democracia/20.jpg" alt="Democracia">
                        <a class="portfolio-btn" href="img/democracia/20.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item tenth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/democracia/21.jpg" alt="Democracia">
                        <a class="portfolio-btn" href="img/democracia/21.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item tenth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/democracia/22.jpg" alt="Democracia">
                        <a class="portfolio-btn" href="img/democracia/22.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item tenth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/democracia/23.jpg" alt="Democracia">
                        <a class="portfolio-btn" href="img/democracia/23.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item tenth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/democracia/24.jpg" alt="Democracia">
                        <a class="portfolio-btn" href="img/democracia/24.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item tenth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/democracia/25.jpg" alt="Democracia">
                        <a class="portfolio-btn" href="img/democracia/25.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item tenth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/democracia/26.jpg" alt="Democracia">
                        <a class="portfolio-btn" href="img/democracia/26.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item tenth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/democracia/27.jpg" alt="Democracia">
                        <a class="portfolio-btn" href="img/democracia/27.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item tenth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/democracia/28.jpg" alt="Democracia">
                        <a class="portfolio-btn" href="img/democracia/28.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>

                 <div class="col-lg-4 col-md-6 p-0 portfolio-item tenth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/democracia/29.jpg" alt="Democracia">
                        <a class="portfolio-btn" href="img/democracia/29.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div></div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item tenth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/democracia/30.jpg" alt="Democracia">
                        <a class="portfolio-btn" href="img/democracia/30.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item tenth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/democracia/31.jpg" alt="Democracia">
                        <a class="portfolio-btn" href="img/democracia/31.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item tenth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/democracia/32.jpg" alt="Democracia">
                        <a class="portfolio-btn" href="img/democracia/32.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item tenth">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/democracia/33.jpg" alt="Democracia">
                        <a class="portfolio-btn" href="img/democracia/33.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item eleventh">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/historia/1.png" alt="Historia">
                        <a class="portfolio-btn" href="img/historia/1.png" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                   <div class="col-lg-4 col-md-6 p-0 portfolio-item eleventh">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/historia/hb2.jpg" alt="Historia">
                        <a class="portfolio-btn" href="img/historia/hb2.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item eleventh">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/historia/hb3.jpg" alt="Historia">
                        <a class="portfolio-btn" href="img/historia/hb3.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item eleventh">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/historia/hb4.jpg" alt="Historia">
                        <a class="portfolio-btn" href="img/historia/hb4.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item eleventh">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/historia/hb5.jpg" alt="Historia">
                        <a class="portfolio-btn" href="img/historia/hb5.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item eleventh">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/historia/hb6.jpg" alt="Historia">
                        <a class="portfolio-btn" href="img/historia/hb6.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item eleventh">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/historia/hb7.jpg" alt="Historia">
                        <a class="portfolio-btn" href="img/historia/hb7.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 p-0 portfolio-item eleventh">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/historia/hb8.jpg" alt="Historia">
                        <a class="portfolio-btn" href="img/historia/hb8.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <script src="js/main.js"></script>

    <?php
    include 'footer.php';
    ?>
</body>

</html>

