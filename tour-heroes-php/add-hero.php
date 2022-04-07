<?php
include 'database-connection.php';
include 'cors.php';
$data = json_decode(file_get_contents('php://input'), true);
$first_name = $data['HeroFirstName'];
$heroDescription = $data['HeroDescription'];
// Attempt insert query execution
$userCheck = $pdo->prepare("SELECT * FROM HEROES where HeroFirstName=?");
$userCheck->execute([$first_name]);
$user=$userCheck->fetch();
if (!$user) {
    $sql = $pdo->prepare("INSERT INTO Heroes (HeroFirstName,HeroDescription) VALUES (?,?)");


    if ($sql->execute([$first_name, $heroDescription])) {
        echo true;
    } else {
        echo "ERROR: not able to execute $sql. ";
    }
}
else
    echo "username already exists";
