<!--
while - loops through a block of code as long as the specified condition is true
do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
for - loops through a block of code a specified number of times
foreach - loops through a block of code for each element in an array
-->

<!--The PHP while Loop-->
<?php
$x=1;
//as long as the condition is true
while ($x<=5){
    echo "number is : $x <br>";
    $x++;
}

$x1=0;
while($x1<= 100){
    echo "<h1 style='color:red'>the number.12 is $x1</h1> <br>";
    $x1+=1;
}
?>

<!--PHP do while Loop-->
<?php
$number = 0;

do{
    echo $number+1 ." welcome<br>";
    $number++;
}
while($number<5);

?>

<!--The PHP for Loop-->
<?php
for ($forNumber=0;$forNumber<10;$forNumber++){
    echo "$forNumber ";
}

//The PHP foreach Loop
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value <br>";
}
?>

<!--PHP Break and Continue-->
<br>
<h2 style="color: aqua">
<?php
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        continue;
    }
    echo "The number is: $x <br>";
}
?></h2>