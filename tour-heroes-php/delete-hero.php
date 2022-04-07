<?php
include_once 'database-connection.php';
include 'cors.php';

$selectedHero = file_get_contents('php://input');
$sql = $pdo->prepare("Delete from Heroes WHERE HeroId =?;");
if ($sql->execute([$selectedHero])){
    echo true;
}else
    echo false;
