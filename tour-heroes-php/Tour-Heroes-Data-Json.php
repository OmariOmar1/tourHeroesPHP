<?php
header("Access-Control-Allow-Origin: *");
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
include_once 'connectToDB.php';//connection to tour-heroes database

$sql = "select * from Heroes;";
$results = mysqli_query($connectionToDatabase, $sql);

//$heroesArray =$results ->fetch_all(MYSQLI_ASSOC);
$heroesArray = mysqli_fetch_all($results, MYSQLI_ASSOC);

$connectionToDatabase->close();

header('Content-type: application/json');
echo json_encode($heroesArray);}

if ($_SERVER['REQUEST_METHOD']=='POST'){
    echo "welcome";
}
