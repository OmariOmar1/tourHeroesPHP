<?php
//connect to database
include_once 'db-connect.php';
include 'cors.php';

if (isset($_GET)) {
    $searchTerm = $_GET['HeroFirstName'];
    $sql = "select * from Heroes WHERE HeroFirstName LIKE '$searchTerm%';";
    $results = mysqli_query($connectionToDatabase, $sql);
    $hero = mysqli_fetch_all($results,MYSQLI_ASSOC);

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($hero);
}
