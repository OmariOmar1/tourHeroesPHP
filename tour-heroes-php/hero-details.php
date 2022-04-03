<?php
//headers
header('Access-Control-Allow-Origin:*');

//connect to database
include_once 'db-connect.php';
$selectedHero = $_GET['HeroId'];
$sql = "select * from Heroes WHERE HeroId =$selectedHero;";
$results = mysqli_query($connectionToDatabase, $sql);
$hero = mysqli_fetch_assoc($results);

header('Content-Type: application/json; charset=utf-8');
echo json_encode($hero);

