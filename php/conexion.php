<?php 

$host = "localhost"; 
$user = "root"; 
$passwords = ""; 
$dbname = "db_dontono";

$conn = new mysqli($host, $user, $passwords, $dbname);

if ($conn->connect_error) { 
    die("Error de conexión: ". $conn->connect_error); 
} 
    $conn->set_charset("utf8mb4"); 
?> 