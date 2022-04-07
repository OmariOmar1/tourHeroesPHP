<?php

include_once 'database-connection.php';
include 'cors.php';

$data = json_decode(file_get_contents('php://input'), true);
$heroId =$data['HeroId'];
$heroFirstName = $data['HeroFirstName'];
$heroDescription = $data['HeroDescription'];
$sql =$pdo->prepare("UPDATE `Heroes` SET HeroFirstName=?,HeroDescription=? WHERE HeroId = ? LIMIT 1");
$sql->execute([$heroFirstName,$heroDescription,$heroId]);

