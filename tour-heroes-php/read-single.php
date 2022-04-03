<?php
//headers
header('Access-Control-Allow-Origin:*');

//connect to database
include_once 'connectToDB.php';
$selectedHero = $_GET['HeroId'];
$sql = "select * from Heroes WHERE HeroId =$selectedHero;";
$results = mysqli_query($connectionToDatabase, $sql);
$hero = mysqli_fetch_all($results, MYSQLI_ASSOC);
var_dump($hero);
//get url
function bindParam( ){

}