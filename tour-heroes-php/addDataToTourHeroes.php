<?php
include 'connectToDB.php';
$data = json_decode(file_get_contents('php://input'), true);

$first_name = mysqli_real_escape_string($connectionToDatabase,$data['HeroFirstName']);

var_dump($data);
// Check connection


// Attempt insert query execution
$sql = "INSERT INTO Heroes (HeroFirstName) VALUES ('$first_name')";
if(mysqli_query($connectionToDatabase, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connectionToDatabase);
}

// Close connection
mysqli_close($connectionToDatabase);