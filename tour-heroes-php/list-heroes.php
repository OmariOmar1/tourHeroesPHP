<?php
include_once 'database-connection.php';//connection to tour-heroes database
include 'cors.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

   $sql = $pdo->query("select * from Heroes;");
   $heroesArray=$sql->fetchAll();

header('Content-type: application/json');
echo json_encode($heroesArray);}