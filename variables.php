<!--Creating (Declaring) PHP Variables-->
<?php
$txt = "Hello world!";
$x = 5;
$y = 10.5;
?>

<!---->
<!--A variable starts with the $ sign, followed by the name of the variable-->
<!--A variable name must start with a letter or the underscore character-->
<!--A variable name cannot start with a number-->
<!--A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )-->
<!--Variable names are case-sensitive ($age and $AGE are two different variables)-->


<!--output variables-->
<?php
$txt = "W3Schools.com";
echo "I love $txt!";
?>
<!--The following example will produce the same output as the example above:-->
<?php
$txt = "W3Schools.com";
echo "I love " . $txt . "!";
?>
<!--The following example will output the sum of two variables:-->
<?php
$x = 5;
$y = 4;
echo $x + $y;
?>
/////////////////////////////////////////////////////////////////////


<!--PHP Variables Scope-->

<!--Variable with global scope:-->
<?php
$x = 5; // global scope

function myTest() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>
<!--Variable with local scope:-->
<?php
function myTest2() {
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
}
myTest2();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>

<!--PHP The global Keyword-->
<?php
$x = 5;
$y = 10;

function myTest() {
    global $x, $y;
    $y = $x + $y;
}

myTest();
echo $y; // outputs 15
?>
<!--The example above can be rewritten like this:-->
<?php
$x = 5;
$y = 10;

function myTest() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest();
echo $y; // outputs 15
?>

<!--PHP The static Keyword-->

<?php
function myTest3() {
    static $x = 0;
    echo $x;
    $x++;
}

myTest3();
myTest3();
myTest3();
?>