<?php
include_once 'db-connect.php';
$selectedHero = file_get_contents('php://input');
$sql = "Delete from Heroes WHERE HeroId =$selectedHero;";
if(mysqli_query($connectionToDatabase, $sql)){
    echo "true";
}