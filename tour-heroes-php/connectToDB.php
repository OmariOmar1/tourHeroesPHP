<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type, X-Requested-With');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, DELETE, PUT');
header('Access-Control-Max-Age: 600');

// to connect to a database we use
//parameters
$dbServerName ="localhost";
$dbUserName = "root";
$dbPassword="";
$dbName= "tour_heroes";
//connection
$connectionToDatabase = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName)or die("Error " . mysqli_error($connectionToDatabase));