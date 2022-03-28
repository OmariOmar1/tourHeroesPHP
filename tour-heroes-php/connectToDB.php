<?php

// to connect to a database we use

//parameters
$dbServerName ="localhost";
$dbUserName = "root";
$dbPassword="";
$dbName= "tour_heroes";

//connection
$connectionToDatabase = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName)or die("Error " . mysqli_error($connectionToDatabase));
