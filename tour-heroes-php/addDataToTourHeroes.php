<?php
header('Access-Control-Allow-Origin', 'http://localhost:4200');
header('Access-Control-Allow-Headers',' Content-Type, Access-Control-Allow-Headers, X-Requested-With');
header('Access-Control-Allow-Methods', 'GET, POST, PATCH, PUT, DELETE, OPTIONS');

/*
include 'connectToDB.php';
// Escape user inputs for security
$first_name = mysqli_real_escape_string($connectionToDatabase,$_POST['name']);

// Check connection
if($connectionToDatabase === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$heroFirstName=$_POST['name'];
// Attempt insert query execution
$sql = "INSERT INTO Heroes (HeroFirstName) VALUES ('$heroFirstName')";
if(mysqli_query($connectionToDatabase, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connectionToDatabase);
}

// Close connection
mysqli_close($connectionToDatabase);
*/