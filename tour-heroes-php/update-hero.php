<?php
include_once 'db-connect.php';

$data = json_decode(file_get_contents('php://input'), true);
$heroId = mysqli_escape_string($connectionToDatabase,$data['HeroId']);
$heroFirstName = mysqli_escape_string($connectionToDatabase,$data['HeroFirstName']);
$heroDescription = mysqli_escape_string($connectionToDatabase,$data['HeroDescription']);
$sql = "UPDATE `Heroes` SET `HeroFirstName`='$heroFirstName',`HeroDescription`='$heroDescription' WHERE `HeroId` = '{$heroId}' LIMIT 1";
if (mysqli_query($connectionToDatabase,$sql)){
    http_response_code(204);
}
else{
    return http_response_code(422);
}
mysqli_close($connectionToDatabase);
