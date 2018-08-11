<?php

$server = 'localhost';
$username = 'root';
$password = 'admin';
$database = 'php_login_database';

$conn = mysqli_connect($server, $username,$password,$database) or die('Error al conectar con Mysql Server.');

/* 
try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}
*/

?>
