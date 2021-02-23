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
        <title>Guía Desarrollo - Overview</title>
        <link rel="shortcut icon" href="assets/img/logo.ico">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    </head>
    <body id="page-top" >
        
        <div class="row mx-0">
            <div class="cardpage col-xl-10 col-lg-12 col-sm-12 mx-auto ">
                <div class="card cardHome " >
                <div class="  menuLat notOpen  ">
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
                                    <li class="nav-item"><a class="nav-link nav-active active" href="inicio.php"><i class="fa fa-user-o" ></i><span >Overview</span></a></li> 
                                    <li class="nav-item"><a class="nav-link nav-null " href="calendario.php"><i class="fa fa-calendar-o" ></i><span >Calendario</span></a></li>
                                    <li class="nav-item"><a class="nav-link nav-null " href="kardex.php"><i class="fa fa-map-o" ></i><span >Tu ruta de aprendizaje</span></a></li>
                                    <li class="nav-item"><a class="nav-link nav-null " href="recomendaciones.php"><i class="fa fa-star-o" ></i><span>Recomendaciones</span></a></li>
                                </ul>
                                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
                            </div>
                        </div>
                    <div class="card-body mainCard"  >
                    
                        <div id="wrapper">
                        <div class="d-flex flex-column" id="content-wrapper">
                            <div id="content">
                                <div >
                                    <img class="img-fluid banner_principal" src="assets/img/banner_principal@1.5x-8.png">
                                    <div class="saludoName mx-auto ">
                                        <h1 class="text-center" >hola jessica</h1>
                                        <p class="text-center">Tienes <b>2</b> cursos pendientes por finalizar,<br> mantente en el camino que te lleve a lograr tus metas</p>

                                    </div>
                                   
                                </div>

                                <!-- First Section -->
                                <div class="container-fluid"><br>
                                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                                       <h3 class=" h3-title mb-0" > <i class="fa fa-chevron-right" aria-hidden="true" style="color: #5e013b"></i> Overview</h3>
                                    </div><br>

                                    <!-- First row cards -->
                                    <div class="row">
                                        <!-- Card 1 -->
                                        <div class="col-md-4 col-xl-4 mb-4">
                                            <div class="card cardBody1 shadow py-2" style="background-color: #d6e9f5">
                                                <div class="card-body cardBodyStyle">
                                                    <h5 class="card-title cardTitle1">Puntos Alcanzados</h5>
                                                    <div class="row no-gutters">
                                                        <div class="col d-flex justify-content-center" style="text-align: left; font-size: 26px; color: #038FEF">
                                                            <img class="icon-overview mr-3" src="assets/img/Card1Icon1.png">
                                                            <span id="alcanzados">350 pt</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card 2 -->
                                        <div class="col-md-4 col-xl-4 mb-4">
                                            <div class="card cardBody1 shadow py-2" style="background-color: #d7f6e2">
                                                <div class="card-body cardBodyStyle">
                                                    <h5 class="card-title cardTitle1">Ingredientes obtenidos</h5>
                                                    <div class="row no-gutters">
                                                        <div class="col-auto d-flex justify-content-center" style="text-align: center;">
                                                            <img class="icon-overview mx-1" src="assets/img/Card2Icon1.png">
                                                            <img class="icon-overview mx-1" src="assets/img/Card2Icon2.png">
                                                            <img class="icon-overview mx-1" src="assets/img/Card2Icon3.png">
                                                            <img class="icon-overview mx-1" src="assets/img/Card2Icon4.png">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card 3 -->
                                        <div class="col-md-4 col-xl-4 mb-4">
                                            <div class="card cardBody1 shadow py-2" style="background-color: #f4f0ff">
                                                <div class="card-body cardBodyStyle">
                                                    <h5 class="card-title cardTitle1">Certificados</h5>
                                                    <div class="row  no-gutters">
                                                        <div class="col d-flex justify-content-center" style="text-align: left; font-size: 26px; color: #038FEF">
                                                            <img class="icon-overview mr-3" src="assets/img/Card3Icon1.png">
                                                            <span id="certificados">4</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End first row Cards -->
                                </div>
                                <!-- End first section -->

                                <!-- Second Section -->
                                <div class="container-fluid"><br>
                                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                                        <h3 class=" h3-title mb-0 pb-4" > <i class="fa fa-chevron-right" aria-hidden="true" style="color: #5e013b"></i> Avance por Pilar</h3>
                                    </div><br>

                                    <!-- First row cards -->
                                    <div class="row">
                                        <!-- Card 1 -->
                                        <div class="mx-auto col-xl-3 col-md-5 col-sm-6  col-12 mb-3 mt-md-5 mt-4">
                                            <div class="card cardBody2 shadow py-2 mt-3">
                                                <a href="#" style="margin-left: 81%;"><i class="fa fa-ellipsis-v text-gray-500" aria-hidden="true"></i></a>
                                                <img src="assets/img/gif/1.gif" class="card-img-top gifCard" alt="...">
                                                <div class="card-body cardBodyS2">
                                                    <header class="card-title cardTitle">Liderazgo</header>
                                                    <div class="row align-items-center no-gutters">
                                                        <div class="col mr-1">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col">
                                                                    <div class="progress">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer text-right">
                                                    <small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> Restan 2 semanas</small>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card 2 -->
                                        <div class="mx-auto col-xl-3 col-md-5 col-sm-6  col-12 mb-3 mt-md-5 mt-4">
                                            <div class="card cardBody2 shadow py-2 mt-3">
                                                <a href="#" style="margin-left: 81%;"><i class="fa fa-ellipsis-v text-gray-500" aria-hidden="true"></i></a>
                                                <img src="assets/img/gif/2.gif" class="card-img-top gifCard" alt="...">
                                                <div class="card-body cardBodyS2">
                                                    <header class="card-title cardTitle">Funcional</header>
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
                                                <div class="card-footer text-right">
                                                    <small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> Restan 3 semanas</small>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card 3 -->
                                        <div class="mx-auto col-xl-3 col-md-5 col-sm-6  col-12 mb-3 mt-md-5 mt-4">
                                            <div class="card cardBody2 shadow py-2 mt-3">
                                                <a href="#" style="margin-left: 81%;"><i class="fa fa-ellipsis-v text-gray-500" aria-hidden="true"></i></a>
                                                <img src="assets/img/gif/3.gif" class="card-img-top gifCard" alt="...">
                                                <div class="card-body cardBodyS2">
                                                    <header class="card-title cardTitle">Método</header>
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
                                                <div class="card-footer text-right">
                                                    <small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> Restan 3 semanas</small>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card 4 -->
                                        <div class="mx-auto col-xl-3 col-md-5 col-sm-6  col-12 mb-3 mt-md-5 mt-4">
                                            <div class="card cardBody2 shadow py-2 mt-3">
                                                <a href="#" style="margin-left: 81%;"><i class="fa fa-ellipsis-v text-gray-500" aria-hidden="true"></i></a>
                                                <img src="assets/img/gif/4.gif" class="card-img-top gifCard" alt="...">
                                                <div class="card-body cardBodyS2">
                                                    <header class="card-title cardTitle">Cultura</header>
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
                                                <div class="card-footer text-right">
                                                    <small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> Restan 4 semanas</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End first row Cards -->
                                </div>
                                <!-- End Second section -->

                                <!-- Third Section -->
                                <div class="container-fluid"><br>
                                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                                        <h3 class=" h3-title mb-0" > <i class="fa fa-chevron-right" aria-hidden="true" style="color: #5e013b"></i> Historial de avance</h3>
                                    </div>

                                    <!-- First row cards -->
                                    <div class="row h-100 ">
                                    <div id="curve_chart" style="width:100%;height:400px"></div>
                                    

                                    </div>
                                    <!-- End first row Cards -->
                                </div>
                                <!-- End Third section -->

                            </div>

                            <!-- Footer 
                            <footer class="bg-white sticky-footer">
                                <div class="container my-auto">
                                    <div class="text-center my-auto copyright"><span>© MagicBox 2021</span></div>
                                </div>
                            </footer> -->
                            </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
        <script src="assets/js/theme.js"></script>
        <script src="assets/js/chart.js"></script>
    </body>
</html>