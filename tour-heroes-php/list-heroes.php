<?php
header("Access-Control-Allow-Origin: http://localhost:4200");
include_once 'db-connect.php';//connection to tour-heroes database
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
$sql = "select * from Heroes;";
    if (!empty($connectionToDatabase)) {
        $results = mysqli_query($connectionToDatabase, $sql);
    }

//$heroesArray =$results ->fetch_all(MYSQLI_ASSOC);
$heroesArray = mysqli_fetch_all($results, MYSQLI_ASSOC);

$connectionToDatabase->close();

header('Content-type: application/json');
echo json_encode($heroesArray);}