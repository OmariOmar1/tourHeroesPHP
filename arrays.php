<?php

$cars = array("bmw","new car type idk", "toyota prius");
echo "I like " .$cars[1]. " , " .$cars[2];
echo count($cars);
//indexed arrays and associative
$arrayLength = count($cars);

for ($i=0; $i<$arrayLength; $i++){
    echo $cars[$i] ."<br>";
}
//associative array
$peopleAge=array(
  "Peter"=>12,
  "mandaline"=>13,
  "jeff"=>34
);
echo $peopleAge["Peter"];
echo "<br>";

//looping
foreach ($peopleAge as $someone=>$age){
    echo " $someone is $age years old <br>";
}

//multi dimensional arrays
$myCars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);
