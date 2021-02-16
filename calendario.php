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
        <title>Guía Desarrollo - Calendario</title>
        <link rel="shortcut icon" href="assets/img/logo.ico">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.1/main.css">
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.1/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.1/locales-all.js"></script>
        <link rel="stylesheet" type="text/css" href="assets/css/styles.css">

        <!-- Script JS Calendar -->
        <script>

          document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                themeSystem: 'bootstrap',
                locale: 'es'
            });
            calendar.render();
          });

        </script>
        <!-- Script JS Calendar -->
    </head>
    <body id="page-top" style="background: url(&quot;assets/img/background@1.5x-8.png&quot;);background-size: cover;">
        <div class="row"></div>
        
        <div class="row">
            <div class="offset-lg-1 col-lg-10 col-sm-12 ">                <div class="card cardHome" style="background-image: url(&quot;assets/img/bkg-card.png&quot;);background-size: contain; background-position: bottom; background-repeat: no-repeat;">
                    <div class="card-body" style="padding-top: 0px; padding-right: 0px;">
                        <div id="wrapper">
                        <div class="col-lg-2  menuLat  ">
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
                                    <li class="nav-item"><a class="nav-link nav-active active" href="inicio.php"><i class="fa fa-user-o"></i><span>Overview</span></a></li> <li style="height: .5rem"></li>
                                    <li class="nav-item"><a class="nav-link nav-null " href="calendario.php"><i class="fa fa-calendar-o" style="color: var(--gray);"></i><span style="color: var(--gray);">Calendario</span></a></li><li style="height: .5rem"></li>
                                    <li class="nav-item"><a class="nav-link nav-null " href="kardex.php"><i class="fa fa-map-o" style="color: var(--gray);"></i><span style="color: var(--gray);">Tu ruta de aprendizaje</span></a></li><li style="height: .5rem"></li>
                                    <li class="nav-item"><a class="nav-link nav-null " href="index.html" style="color: var(--gray);"><i class="fa fa-star-o" style="color: var(--gray);"></i><span>Recomendaciones</span></a></li>
                                </ul>
                                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
                        </div>
                        <div class="d-flex flex-column" id="content-wrapper">
                            <div id="content">
                                <img class="img-fluid" src="assets/img/banner_principal@1.5x-8.png" style="width: 100%; height: auto; margin-left: .2rem;">

                                <!-- First Section -->
                                <div class="container-fluid"><br>
                                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                                       <img class="img-fluid" src="assets/img/calendario/banner.gif" style="width: 100%;">
                                    </div><br>

                                    <!-- First row cards -->
                                    <div class="row">
                                        <!-- Card 1 -->
                                        <div class="col-md-7 col-xl-7 mb-7">
                                            <div class="d-sm-flex justify-content-between align-items-center mb-4">
                                                <h3 class="text-dark mb-0" style="font-size: 22px;color: #3e77c7!important;"> <i class="fa fa-chevron-right" aria-hidden="true" style="color: #5e013b"></i> Calendario de Cursos</h3>
                                            </div><br>
                                            <div class="card cardCalendar">
                                                <div class="card-body">
                                                    <div id='calendar'></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card 2 -->
                                        <div class="col-md-5 col-xl-5 mb-5">
                                            <div class="d-sm-flex justify-content-between align-items-center mb-4">
                                                <h3 class="text-dark mb-0" style="font-size: 22px;color: #3e77c7!important;"> <i class="fa fa-chevron-right" aria-hidden="true" style="color: #5e013b"></i> Eventos del mes</h3>
                                            </div><br>
                                            <!-- Card Button 1 -->
                                            <div class="card mb-2">
                                              <div class="row no-gutters">
                                                <div class="col-md-3">
                                                  <img src="assets/img/calendario/Asset 43@1.5x-8.png" class="card-img" alt="...">
                                                </div>
                                                <div class="col-md-9">
                                                  <div class="card-body cardBodyCalendar">
                                                    <p class="card-title">Comunicación interpersonal</p>
                                                    <p class="card-text" style="color: #7a56ff">26 de Abril</p>
                                                    <p class="card-text"><button class="btn btnCalendar btn-sm" href="#">Ir ahora</button></p>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <!-- Card Button 1 -->
                                            <div class="card mb-2">
                                              <div class="row no-gutters">
                                                <div class="col-md-3">
                                                  <img src="assets/img/calendario/Asset 44@1.5x-8.png" class="card-img" alt="...">
                                                </div>
                                                <div class="col-md-9">
                                                  <div class="card-body cardBodyCalendar">
                                                    <p class="card-title">Comunicación interpersonal</p>
                                                    <p class="card-text" style="color: #7a56ff">26 de Abril</p>
                                                    <p class="card-text"><button class="btn btnCalendar btn-sm" href="#">Ir ahora</button></p>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <!-- Card Button 1 -->
                                            <div class="card mb-2">
                                              <div class="row no-gutters">
                                                <div class="col-md-3">
                                                  <img src="assets/img/calendario/Asset 45@1.5x-8.png" class="card-img" alt="...">
                                                </div>
                                                <div class="col-md-9">
                                                  <div class="card-body cardBodyCalendar">
                                                    <p class="card-title">Comunicación interpersonal</p>
                                                    <p class="card-text" style="color: #7a56ff">26 de Abril</p>
                                                    <p class="card-text"><button class="btn btnCalendar btn-sm" href="#">Ir ahora</button></p>
                                                  </div>
                                                </div>
                                              </div>
                                            </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                        </div>
                                    </div>
                                    <!-- End first row Cards -->
                                </div>
                                <!-- End first section -->

                            </div>

                            </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
        <script src="assets/js/theme.js"></script>
    </body>
</html>