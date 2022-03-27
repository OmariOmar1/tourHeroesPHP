<?php
include_once 'connectToDB.php';
if (isset($_POST['submit'])){
    $userName = $_POST['userName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql = "INSERT INTO Heroes (HeroFirstName,HeroLastName,HeroDescription)
     VALUES ('$userName','$email','$password')";
    if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !<br> <a href='tourHeroesData.php'>Go back</a> ";
}
    else{
        echo "something went wrong please try again later..";
    }
}