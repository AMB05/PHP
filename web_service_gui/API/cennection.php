<?php

$host = "localhost";
$port = 3306;
$dbname = "penduduk";
$username = "root";
$password = "";

global $dbConnection;

// $dbConnection = new PDO("mysql:host=$host:$port;dbname=$dbname", $username, $password, array(
//   PDO::ATTR_PERSISTENT => true
// ));
$dbConnection = new PDO("mysql=$port;dbname=$dbname", $username, $password, array(
  PDO::ATTR_PERSISTENT => true
));
$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);