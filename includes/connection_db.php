<?php
$host = 'localhost'; 
$username = 'root'; 
$password = 'root';
$database = 'guia_desarrollo'; 

$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
?>