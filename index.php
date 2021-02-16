<?php
include("includes/constants.php");
session_start();
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
header("Location: inicio.php");
exit;
}
// Se definen las variables y se inicializan con valores vacios
$username = $password = "";
$username_err = $password_err = "";
// Se procesa el formulario cuando se aceptan los resultados
if ($_SERVER["REQUEST_METHOD"] == "POST") {

// Verificar si el campo del usuario esta vacio
if (empty(trim($_POST["username"]))) {
$username_err = "Ingresa el usuario.";
}else{
$username = trim($_POST["username"]);
}
// Verificar si el campo de la contraseña esta vacio
if (empty(trim($_POST["password"]))) {
$password_err = "Ingresa la contraseña.";
}else{
$password = trim($_POST["password"]);
}
// Validación de las credenciales
if (empty($username_err) && empty($password_err)) {
// Se establece la consulta
$sql = "SELECT id, username, password, nombre, email, created_at, rol FROM users WHERE username = ?";
if ($stmt = mysqli_prepare($link, $sql)) {
// Relacionar las variables con la declaración de los parametros
mysqli_stmt_bind_param($stmt, "s", $param_username);
// Se ingresan os parametros
$param_username = $username;
// Se ejecuta la consulta
if (mysqli_stmt_execute($stmt)) {
// Se almacena el resultado
mysqli_stmt_store_result($stmt);
// Se verifica que el usuario exista y despues se verifica la contraseña
if (mysqli_stmt_num_rows($stmt) == 1) {
// Se relacionan los resultados con las variables
mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password, $nombre, $email, $created_at, $rol);
if (mysqli_stmt_fetch($stmt)) {
if (password_verify($password, $hashed_password)) {
// La contraseña es correcta y se inicia sesión
session_start();
// Se almacena el resultado en la variables de la sesión
$_SESSION["loggedin"] = true;
$_SESSION["id"] = $id;
$_SESSION["username"] = $username;
$_SESSION["nombre"] = $nombre;
$_SESSION["email"] = $email;
$_SESSION["created_at"] = $created_at;
$_SESSION["rol"] = $rol;
// Se redirecciona a la pagina principal
header("Location: inicio.php");
}else{
// Se muestra mensaje de error si la contraseña no es correcta
$password_err = "La contraseña que ingresaste no es valida.";
}
}
}else{
// Se muestra un mensaje de error si el usuario no es correcto
$username_err = "No existe cuenta con el usuario ingresado.";
}
}else{
echo "¡Opps! Algo salio mal. Intenta mas tarde.";
}
}
// Se cierra la declaración de las variables
mysqli_stmt_close($stmt);
}
// Se cierrra la conexión
mysqli_close($link);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Guia Desarrollo | Login</title>
        <link rel="shortcut icon" href="assets/img/logo.ico">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/styles2.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">

        <!-- Global site tag (gtag.js) - Google Analytics 
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-169144816-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-169144816-1');
        </script>-->

    </head>
    <body style="background-image: url('assets/img/BG.png'); background-size: cover;">
        <div style="height:40vh;">
        </div>
        <div>
            <div class="container-fluid ">
                <div class="row main-content d-flex flex-wrap align-items-center">
                    <div class="col-md-6 col-lg-4"></div>
                    <div class="col-lg-4">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <div class="form-group <?php echo (!empty($username_err)) ?'has-error' : ''; ?>">

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <!-- Icon User 
                                            <i class="fa fa-user-circle"></i>-->
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: #3F00EA;">
                                                <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                                                <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                                <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <input class="form-control" type="text" name="username" value="<?php echo $username; ?>" placeholder="Usuario">
                                    </div><span class="help-block"><?php echo $username_err; ?>
                                </span>

                            </div>
                            <!-- echo "<script type='text/javascript'>alert('$message');</script>"; -->
                            <div class="form-group <?php echo (!empty($password_err)) ?'has-error' : ''; ?>">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <!-- Icon Password 
                                            <i class="fas fa-lock"></i>-->
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-lock-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: #3F00EA;">
                                                <path d="M2.5 9a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-7a2 2 0 0 1-2-2V9z"/>
                                                <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <input class="form-control" type="password" name="password" placeholder="Contraseña">
                                </div> 
                                <div class="row">
                                    <div class="col-lg-1"> 
                                    </div>
                                    <div class="col-lg-7"> 
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label already" for="exampleCheck1">Recordar contraseña</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4"> 
                                        <span class="help-block"><?php echo $password_err; ?></span>
                                        <a class="already" href="#">¿Olvidaste tu contraseña?</a>
                                    </div>
                                </div>
                            </div><br>
                            <div class="form-group align-items-center">
                                <center><button class="btn btn-secondary button2" type="submit" value="Login">Entrar</button></center>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4"></div>
                </div>
            </div>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
    </html>
