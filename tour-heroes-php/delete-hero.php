<?php
include_once 'db-connect.php';
$selectedHero=$_POST['HeroId'];
$sql = "Delete from Heroes WHERE HeroId =$selectedHero;";
if(mysqli_query($connectionToDatabase, $sql)){
    echo "true";
}