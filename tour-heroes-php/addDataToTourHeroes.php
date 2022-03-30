<?php
include 'connectToDB.php';
// Escape user inputs for security
json_decode($_REQUEST['HeroFirstName']);
echo $_REQUEST['HeroFirstName'];
$first_name = mysqli_real_escape_string($connectionToDatabase,$_REQUEST['HeroFirstName']);

// Attempt insert query execution
$sql = "INSERT INTO Heroes (HeroFirstName) VALUES ('$first_name')";

if(mysqli_query($connectionToDatabase, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connectionToDatabase);
}

// Close connection
mysqli_close($connectionToDatabase);