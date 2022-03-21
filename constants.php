<!--
Syntax
define(name, value, case-insensitive)
-->

<?php
define("greetings","welcome to omar tutorials");
echo greetings;
?>
<br>
<!--Parameters:

name: Specifies the name of the constant
value: Specifies the value of the constant
case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false-->
<?php
define("welcome","hi and welcome to my new tutorials for php",true);
echo    WELCOME;
?>

<!--PHP Constant Arrays only works in php7 and above-->
<br>
<?php
function mySpaceGreeting(){
    echo WELCOME." in php function";
}
mySpaceGreeting();
?>