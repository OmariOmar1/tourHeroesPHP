<?php
//connect to database
include_once 'database-connection.php';
include 'cors.php';

if (isset($_GET)) {
    $searchTerm = $_GET['HeroFirstName'];
    $searchTerm = "$searchTerm%";
    $sql = $pdo->prepare("select * from Heroes WHERE HeroFirstName LIKE ?");
    $sql->execute([$searchTerm]);
    $hero =$sql->fetchAll(PDO::FETCH_ASSOC) ;

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($hero);
}
