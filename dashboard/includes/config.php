<?php

function connection($pageName){




$host = 'localhost';
$username = 'root';
$password = '';
$connection = mysqli_connect($host, $username, $password);
if (!$connection) {
  die('Database connection failed: ' . mysqli_connect_error());
};

// Check if the database exists

$databaseName = 'freshcart';
$query = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$databaseName'";
$result = mysqli_query($connection, $query);

if (!$result || mysqli_num_rows($result) === 0) {
  
  // Database does not exist
  // Redirect to the desired page or take appropriate action
if ($pageName=="signin.php") {
  header('Location: 404error.php?signin="failed"');
  exit;
}else{
  header('Location: 404error.php');
  exit;

}


} 
$connection = mysqli_connect('localhost', 'root', '', 'freshcart');
}

// echo "<pre>";
// print_r($_SERVER);
// echo basename($_SERVER['SCRIPT_NAME']);
connection(basename($_SERVER['SCRIPT_NAME']))
?>