<?php
include("includes/constants.php");
session_start();
if(!isset($_SESSION['loggedin']))
{
header("Location: index.php");
}

$role = $_SESSION['rol'];
$user = $_SESSION['username'];
$id = $_SESSION['id'];
$nombre = $_SESSION['nombre'];
$email = $_SESSION['email'];
$fecha = $_SESSION['created_at'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Guía Desarrollo - Kardex</title>
        <link rel="shortcut icon" href="assets/img/logo.ico">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    </head>
    <body id="page-top" >
        <div class="row"></div>
        
        <div class="row mx-0">
        <div class="offset-lg-1 col-lg-10 col-sm-12 ">
                <div class="card cardHome">
                    <div class="card-body mainCard" >
                        <div id="wrapper">
                        <div class="menuLat notOpen ">
                        <img class="burger m-4" src="assets/img/burger.png"> 

                            <div class="container-fluid d-flex flex-column p-0">
                                <a class="navbar-brand d-flex justify-content-center align-items-center" href="#" style="margin-top: 2rem;">
                                <div class="sidebar-brand-icon" style="text-align: center;">
                                    <img class="img-fluid" src="assets/img/picture_profile.png" style="width: 72%;">
                                    <div class="sidebar-brand-text" style="padding-top: .72rem;">
                                    <span style="color: rgb(0,0,0);">Usuario</span>
                                    </div>
                                </div>
                                </a>
                                <hr class="sidebar-divider my-0" style="padding-top: 135px;">
                                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                                    <li class="nav-item"><a class="nav-link nav-null" href="inicio.php"><i class="fa fa-user-o" ></i><span >Overview</span></a></li> 
                                    <li class="nav-item"><a class="nav-link nav-null " href="calendario.php"><i class="fa fa-calendar-o" ></i><span >Calendario</span></a></li>
                                    <li class="nav-item"><a class="nav-link  nav-active active  " href="kardex.php"><i class="fa fa-map-o" ></i><span >Tu ruta de aprendizaje</span></a></li>
                                    <li class="nav-item"><a class="nav-link nav-null " href="index.html"><i class="fa fa-star-o" ></i><span>Recomendaciones</span></a></li>
                                </ul>
                                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
                            </div>
                        </div>

                        <div class="d-flex flex-column" id="content-wrapper">
                            <div id="content">
                                <img class="img-fluid banner_principal" src="assets/img/banner_principal@1.5x-8.png" >

                                <!-- First Section -->
                                <div class="container-fluid"><br>
                                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                                        <h3 class="h3-title mb-0" > 
                                            <i class="fa fa-chevron-right" aria-hidden="true" style="color: #5e013b"></i> Kardex
                                        </h3>
                                    </div><br>

                                    <!-- First row cards -->
                                    <div class="row mt-xl-4 d-flex align-items-center ">
                                        <!-- Card 1 -->
                                        <div class="col">
                                            <div class="card cardBody2 shadow py-2">
                                                <img src="assets/img/gif/1.gif" class="card-img-top gifCardHeader" alt="...">
                                                <div class="card-body cardBodyKardex">
                                                    <header class="card-title cardTitleHeader">Pilar Liderazgo</header>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card 2 -->
                                        <div class="col">
                                            <div class="card cardBody2 shadow py-2">
                                                <a href="#" style="margin-left: 81%;"><i class="fa fa-ellipsis-v text-gray-500" aria-hidden="true"></i></a>
                                                <img src="assets/img/kardex/Asset 55@1.5x-8.png" class="card-img-top gifCard" alt="...">
                                                <div class="card-body cardBodyKardex">
                                                    <div class="row align-items-center no-gutters">
                                                        <div class="col mr-1">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col">
                                                                    <div class="progress">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card 3 -->
                                        <div class="col">
                                            <div class="card cardBody2 shadow py-2">
                                                <a href="#" style="margin-left: 81%;"><i class="fa fa-ellipsis-v text-gray-500" aria-hidden="true"></i></a>
                                                <img src="assets/img/kardex/Asset 56@1.5x-8.png" class="card-img-top gifCard" alt="...">
                                                <div class="card-body cardBodyKardex">
                                                    <div class="row align-items-center no-gutters">
                                                        <div class="col mr-1">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col">
                                                                    <div class="progress">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card 4 -->
                                        <div class="col">
                                            <div class="card cardBody2 shadow py-2">
                                                <a href="#" style="margin-left: 81%;"><i class="fa fa-ellipsis-v text-gray-500" aria-hidden="true"></i></a>
                                                <img src="assets/img/kardex/Asset 57@1.5x-8.png" class="card-img-top gifCard" alt="...">
                                                <div class="card-body cardBodyKardex">
                                                    <div class="row align-items-center no-gutters">
                                                        <div class="col mr-1">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col">
                                                                    <div class="progress">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card 5 -->
                                        <div class="col">
                                            <div class="card">
                                                <div class="card-body cardBodyKardex2">
                                                    <header class="card-title cardTitle">50 pts</header>
                                                    <header class="card-title cardTitle">Puntos por lograr</header>
                                                    <header class="card-title cardTitle">30 pts</header>
                                                </div>
                                            </div>
                                        </div>
                                    </div><br><br>
                                    <!-- End first row Cards -->

                                    <!-- Second row cards -->
                                    <div class="row mt-xl-4 d-flex align-items-center">
                                        <!-- Card 1 -->
                                        <div class="col">
                                            <div class="card cardBody2 shadow py-2">
                                                <img src="assets/img/gif/2.gif" class="card-img-top gifCardHeader" alt="...">
                                                <div class="card-body cardBodyKardex">
                                                    <header class="card-title cardTitleHeader">Pilar Funcional</header>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card 2 -->
                                        <div class="col">
                                            <div class="card cardBody2 shadow py-2">
                                                <a href="#" style="margin-left: 81%;"><i class="fa fa-ellipsis-v text-gray-500" aria-hidden="true"></i></a>
                                                <img src="assets/img/kardex/Asset 55@1.5x-8.png" class="card-img-top gifCard" alt="...">
                                                <div class="card-body cardBodyKardex">
                                                    <div class="row align-items-center no-gutters">
                                                        <div class="col mr-1">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col">
                                                                    <div class="progress">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card 3 -->
                                        <div class="col">
                                            <div class="card cardBody2 shadow py-2">
                                                <a href="#" style="margin-left: 81%;"><i class="fa fa-ellipsis-v text-gray-500" aria-hidden="true"></i></a>
                                                <img src="assets/img/kardex/Asset 56@1.5x-8.png" class="card-img-top gifCard" alt="...">
                                                <div class="card-body cardBodyKardex">
                                                    <div class="row align-items-center no-gutters">
                                                        <div class="col mr-1">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col">
                                                                    <div class="progress">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card 4 -->
                                        <div class="col">
                                            <div class="card cardBody2 shadow py-2">
                                                <a href="#" style="margin-left: 81%;"><i class="fa fa-ellipsis-v text-gray-500" aria-hidden="true"></i></a>
                                                <img src="assets/img/kardex/Asset 57@1.5x-8.png" class="card-img-top gifCard" alt="...">
                                                <div class="card-body cardBodyKardex">
                                                    <div class="row align-items-center no-gutters">
                                                        <div class="col mr-1">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col">
                                                                    <div class="progress">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card 5 -->
                                        <div class="col">
                                            <div class="card">
                                                <div class="card-body cardBodyKardex2">
                                                    <header class="card-title cardTitle">50 pts</header>
                                                    <header class="card-title cardTitle">Puntos por lograr</header>
                                                    <header class="card-title cardTitle">30 pts</header>
                                                </div>
                                            </div>
                                        </div>
                                    </div><br><br>
                                    <!-- End first row Cards -->

                                    <!-- Third row cards -->
                                    <div class="row mt-xl-4 d-flex align-items-center">
                                        <!-- Card 1 -->
                                        <div class="col">
                                            <div class="card cardBody2 shadow py-2">
                                                <img src="assets/img/gif/3.gif" class="card-img-top gifCardHeader" alt="...">
                                                <div class="card-body cardBodyKardex">
                                                    <header class="card-title cardTitleHeader">Pilar Método</header>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card 2 -->
                                        <div class="col">
                                            <div class="card cardBody2 shadow py-2">
                                                <a href="#" style="margin-left: 81%;"><i class="fa fa-ellipsis-v text-gray-500" aria-hidden="true"></i></a>
                                                <img src="assets/img/kardex/Asset 55@1.5x-8.png" class="card-img-top gifCard" alt="...">
                                                <div class="card-body cardBodyKardex">
                                                    <div class="row align-items-center no-gutters">
                                                        <div class="col mr-1">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col">
                                                                    <div class="progress">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card 3 -->
                                        <div class="col">
                                            <div class="card cardBody2 shadow py-2">
                                                <a href="#" style="margin-left: 81%;"><i class="fa fa-ellipsis-v text-gray-500" aria-hidden="true"></i></a>
                                                <img src="assets/img/kardex/Asset 56@1.5x-8.png" class="card-img-top gifCard" alt="...">
                                                <div class="card-body cardBodyKardex">
                                                    <div class="row align-items-center no-gutters">
                                                        <div class="col mr-1">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col">
                                                                    <div class="progress">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card 4 -->
                                        <div class="col">
                                            <div class="card cardBody2 shadow py-2">
                                                <a href="#" style="margin-left: 81%;"><i class="fa fa-ellipsis-v text-gray-500" aria-hidden="true"></i></a>
                                                <img src="assets/img/kardex/Asset 57@1.5x-8.png" class="card-img-top gifCard" alt="...">
                                                <div class="card-body cardBodyKardex">
                                                    <div class="row align-items-center no-gutters">
                                                        <div class="col mr-1">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col">
                                                                    <div class="progress">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card 5 -->
                                        <div class="col">
                                            <div class="card">
                                                <div class="card-body cardBodyKardex2">
                                                    <header class="card-title cardTitle">50 pts</header>
                                                    <header class="card-title cardTitle">Puntos por lograr</header>
                                                    <header class="card-title cardTitle">30 pts</header>
                                                </div>
                                            </div>
                                        </div>
                                    </div><br><br>
                                    <!-- End first row Cards -->

                                    <!-- Fourth row cards -->
                                    <div class="row mt-xl-4 d-flex align-items-center">
                                        <!-- Card 1 -->
                                        <div class="col">
                                            <div class="card cardBody2 shadow py-2">
                                                <img src="assets/img/gif/4.gif" class="card-img-top gifCardHeader" alt="...">
                                                <div class="card-body cardBodyKardex">
                                                    <header class="card-title cardTitleHeader">Pilar Cultura</header>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card 2 -->
                                        <div class="col">
                                            <div class="card cardBody2 shadow py-2">
                                                <a href="#" style="margin-left: 81%;"><i class="fa fa-ellipsis-v text-gray-500" aria-hidden="true"></i></a>
                                                <img src="assets/img/kardex/Asset 55@1.5x-8.png" class="card-img-top gifCard" alt="...">
                                                <div class="card-body cardBodyKardex">
                                                    <div class="row align-items-center no-gutters">
                                                        <div class="col mr-1">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col">
                                                                    <div class="progress">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card 3 -->
                                        <div class="col">
                                            <div class="card cardBody2 shadow py-2">
                                                <a href="#" style="margin-left: 81%;"><i class="fa fa-ellipsis-v text-gray-500" aria-hidden="true"></i></a>
                                                <img src="assets/img/kardex/Asset 56@1.5x-8.png" class="card-img-top gifCard" alt="...">
                                                <div class="card-body cardBodyKardex">
                                                    <div class="row align-items-center no-gutters">
                                                        <div class="col mr-1">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col">
                                                                    <div class="progress">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card 4 -->
                                        <div class="col">
                                            <div class="card cardBody2 shadow py-2">
                                                <a href="#" style="margin-left: 81%;"><i class="fa fa-ellipsis-v text-gray-500" aria-hidden="true"></i></a>
                                                <img src="assets/img/kardex/Asset 57@1.5x-8.png" class="card-img-top gifCard" alt="...">
                                                <div class="card-body cardBodyKardex">
                                                    <div class="row align-items-center no-gutters">
                                                        <div class="col mr-1">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col">
                                                                    <div class="progress">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card 5 -->
                                        <div class="col">
                                            <div class="card">
                                                <div class="card-body cardBodyKardex2">
                                                    <header class="card-title cardTitle">50 pts</header>
                                                    <header class="card-title cardTitle">Puntos por lograr</header>
                                                    <header class="card-title cardTitle">30 pts</header>
                                                </div>
                                            </div>
                                        </div>
                                    </div><br><br>
                                    <!-- End first row Cards -->

                                </div><br><br><br><br><br><br><br><br><br>
                                <!-- End First section -->

                            </div>

                            </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
        <script src="assets/js/theme.js"></script>
    </body>
</html>