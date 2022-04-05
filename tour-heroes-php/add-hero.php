<?php
include 'db-connect.php';
$data = json_decode(file_get_contents('php://input'), true);
$first_name = stripcslashes(mysqli_real_escape_string($connectionToDatabase,$data['HeroFirstName']));
$heroDescription = stripcslashes(mysqli_escape_string($connectionToDatabase,$data['HeroDescription']));
// Attempt insert query execution
$sql = "INSERT INTO Heroes (HeroFirstName,HeroDescription) VALUES ('$first_name','$heroDescription')";

if(mysqli_query($connectionToDatabase, $sql)){
    echo true;
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connectionToDatabase);
}

// Close connection
mysqli_close($connectionToDatabase);