<?php

// to connect to a database we use

//parameters
$dbServerName ="localhost";
$dbUserName = "root";
$dbPassword="";
$dbName= "tour_heroes";

//connection
$conn = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);
