<?php
// to connect to a database we use
//parameters
$dbServerName ="127.0.0.1";
$dbUserName = "root";
$dbPassword="";
$dbName= "tour_heroes";
//connection
$connectionToDatabase = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName) or die("Error " . mysqli_error($connectionToDatabase));
//
//$connectionToDatabase = new PDO('mysql:host=localhost;dbname=tour_heroes', 'root', '');
//
//$statement = $connectionToDatabase->query("SELECT * FROM heroes;");
//$row = $statement->fetch(PDO::FETCH_ASSOC);
//var_dump($row);