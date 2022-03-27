<?php
//including connection file
include_once "connectToDB.php";

$sql = "select * from Heroes;";
$results = mysqli_query($conn, $sql);
$resultscheck = mysqli_num_rows($results);
?>
<!DOCTYPE html>
<html>
<head>
    <title>testing database</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style>


        .wrapper{
            width: 500px;
            margin: 0 auto;
    </style>
</head>

<body>

<table class="table table-striped">
    <tr>
        <th>Hero Id</th>
        <th>Hero First Name</th>
        <th>Hero Last NameName</th>
        <th>Hero Password</th>
    </tr>
    <?php if ($resultscheck > 0) {
        while ($row = mysqli_fetch_assoc($results)) {
            echo "<tr scope='row'><td scope='col'>" .
                $row["HeroId"] .
                "</td><td>" .
                $row["HeroFirstName"] .
                "</td><td>" .
                $row["HeroLastName"] .
                "</td><td>" .
                $row["HeroDescription"] .
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
                    <h2>Heroes Form</h2>
                </div>
                <p>Please fill this form and submit to add Hero record to the database.</p>
                <form action="addDataToTourHeroes.php" method="post">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="userName" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>LastName</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="mobile" name="password" multiple class="form-control">
                    </div>
                    <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>


