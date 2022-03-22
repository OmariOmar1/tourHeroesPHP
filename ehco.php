<?php
session_start();
$_SESSION["omar"]="new";
echo $_SESSION["omar"];
echo "<a href='sessions.php'>go to other page</a>"
?>


<!--The PHP echo Statement-->
<!--Display Text-->
<?php
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
?>

<!--Display Variables-->
<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;
filter_list()
?>
