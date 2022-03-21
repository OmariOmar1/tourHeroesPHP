<!--PHP has the following functions to check if the type of a variable is integer:-->

<!--is_int()-->
<!--is_integer() - alias of is_int()-->
<!--is_long() - alias of is_int()-->


<?php
$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));
?>

<!--PHP has the following functions to check if the type of a variable is float:-->
<!---->
<!--is_float()-->
<!--is_double() - alias of is_float()-->

<?php
$x = 10.365;
var_dump(is_float($x));
?>

<!--PHP has the following functions to check if a numeric value is finite or infinite:-->
<!---->
<!--is_finite()-->
<!--is_infinite()-->
<?php
$x = 1.9e411;
var_dump($x);
?>

<!--PHP has the following functions to check if a value is not a number:-->
<!---->
<!--is_nan()-->

<?php
$x=acos(8);
echo "</br>".$x;
?>

<!--PHP Numerical Strings-->
</br>
<?php
$x=59896;
var_dump(is_numeric($x));

$x="12335";
var_dump(is_numeric($x));

$x = "5f9.85" + 100;
var_dump(is_numeric($x));
echo $x;

$x = "Hello $x";
var_dump(is_numeric($x));
echo $x;
?>
<br>
<?php
$x=123.2;
echo (int)$x;

$x=123.9;
echo "<br>".(int)$x;

$x=(int)"123";
echo $x;
?>