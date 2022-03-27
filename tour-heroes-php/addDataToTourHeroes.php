<?php
include_once 'connectToDB.php';
if (isset($_POST['submit'])){
    $firstName = $_POST['userName'];
    $description=$_POST['description'];
    $sql = "INSERT INTO Heroes (HeroFirstName,HeroDescription)
     VALUES ('$firstName','$description')";
    if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !<br> <a href='tourHeroesData.php'>Go back</a> ";
}
    else{
        echo "something went wrong please try again later..";
    }
}