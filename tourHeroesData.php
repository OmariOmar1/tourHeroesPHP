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
    <style>
        table, th, td {
            text-align: center;
            border: 1px solid;
        }
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


