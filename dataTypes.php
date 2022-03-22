<!--String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource-->

<!--PHP String-->
<?php
$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>";
echo $y;
?>

<!--PHP Integer-->
<?php
$x = 5985;
var_dump($x);
?>

<!--PHP Float-->
<?php
$x = 10.365;
var_dump($x);
?>

<!--php arrays-->
<?php
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>

<!--PHP Object-->
<?php
class vehicle {
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
    public function message() {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}

$myCar = new vehicle("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new vehicle("red", "Toyota");
echo $myCar -> message();
?>
<!--null values-->
<?php
$x = "Hello world!";
$x = null;
var_dump($x);
?>

