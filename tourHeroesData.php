<?php
//including connection file
include_once "connectToDB.php";

$sql = "select * from users;";
$results = mysqli_query($conn, $sql);
$resultscheck = mysqli_num_rows($results);
?>
<!DOCTYPE html>
<html>
<head>
    <title>testing dtabase</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style>
        table, th, td {
            text-align: center;
            border: 1px solid;
        }
        .wrapper{
            width: 500px;
            margin: 0 auto;
    </style>
</head>

<body>

<table>
    <tr>
        <th>User Id</th>
        <th>User Email</th>
        <th>User Name</th>
        <th>User Password</th>
    </tr>
    <?php if ($resultscheck > 0) {
        while ($row = mysqli_fetch_assoc($results)) {
            echo "<tr><td>" .
                $row["UserId"] .
                "</td><td>" .
                $row["UserEmail"] .
                "</td><td>" .
                $row["UserName"] .
                "</td><td>" .
                $row["Password"] .
                "</td><tr>";
        }
    } else {
        echo "no results";
    } ?>
</table>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h2>Contact Form</h2>
                </div>
                <p>Please fill this form and submit to add Hero record to the database.</p>
                <form action="addDataToTourHeroes.php" method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="userName" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="mobile" name="password" class="form-control">
                    </div>
                    <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>


