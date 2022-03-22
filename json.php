<?php
//assosiate array
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
echo $age;
echo json_encode($age);
//indexed array
$cars = array("Volvo", "BMW", "Toyota");
echo json_encode($cars);
//decode
$stringer= '{"Peter":35,"Ben":37,"Joe":43}';
echo "<br>";
$obj=json_decode($stringer);
echo $obj->Peter;
//loop on obj
foreach ($obj as $name => $age){
    echo "hello my name is $name , I am $age years old <br>";
}