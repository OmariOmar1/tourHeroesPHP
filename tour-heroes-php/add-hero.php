<?php
include 'db-connect.php';
$data = json_decode(file_get_contents('php://input'), true);
$first_name = mysqli_real_escape_string($connectionToDatabase,$data['HeroFirstName']);

// Attempt insert query execution
$sql = "INSERT INTO Heroes (HeroFirstName) VALUES ('$first_name')";

if(mysqli_query($connectionToDatabase, $sql)){
    echo true;
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connectionToDatabase);
}

// Close connection
mysqli_close($connectionToDatabase);