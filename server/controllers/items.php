<?php

// header('Content-Type: application/jon');
header("Access-Control-Allow-Origin: *");    
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


require_once('../config/database.php');

// return connection
$objdb = new database();
$conn = $objdb->getconnection();

// Querys
$consulta = $conn->query("Select * from items");
$consulta->execute();

$datos = $consulta->fetchAll(PDO::FETCH_ASSOC);
// $list = array(var_dump($datos));

// Return Json
echo json_encode($datos);

?>