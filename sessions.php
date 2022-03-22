<?php
session_start();
$_SESSION["omar"]=12;
echo $_SESSION["omar"];
echo "<a href='ehco.php'>go to another page and check the session in first line</a>";