<?php

//headers

//connect to database
include_once 'db-connect.php';
include 'cors.php';

$selectedHero = $_GET['HeroId'];
$sql = "select * from Heroes WHERE HeroId =$selectedHero;";
$results = mysqli_query($connectionToDatabase, $sql);
$hero = mysqli_fetch_assoc($results);

//header('Access-Control-Allow-Origin: *');
//header('Access-Control-Allow-Headers: Content-Type, X-Requested-With');
//header('Access-Control-Allow-Methods: POST, GET, OPTIONS, DELETE, PUT');
//header('Access-Control-Max-Age: 600');

header('Content-Type: application/json; charset=utf-8');
echo json_encode($hero);

