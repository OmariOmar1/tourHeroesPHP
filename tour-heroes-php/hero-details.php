<?php

//headers

//connect to database
include_once 'database-connection.php';
include 'cors.php';

$selectedHero = $_GET['HeroId'];

$sql =$pdo->prepare("select * from Heroes WHERE HeroId =?;");
$sql->execute([$selectedHero]);
$hero = $sql->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json; charset=utf-8');
echo json_encode($hero[0]);

