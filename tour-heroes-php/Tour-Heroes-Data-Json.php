<?php
include_once 'connectToDB.php';//connection to tour-heroes database

$sql = "select * from Heroes;";
$results = mysqli_query($connectionToDatabase, $sql);

$heroesArray = array();
while ($row = mysqli_fetch_assoc($results)){
    $heroesArray[] = $row;
}
$connectionToDatabase->close();

header('Content-type: application/json');
echo (json_encode($heroesArray));
