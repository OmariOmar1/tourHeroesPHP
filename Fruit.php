<?php
class Fruit {
    public $name;
    public $color;

    function __construct($name, $color) {
        echo "<br>just got in $name fruit<br>";
        $this->name = $name;
        $this->color = $color;
    }
    function get_name() {
        return $this->name;
    }
    function get_color() {
        return $this->color;
    }
    function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "<br>leaving $this->name Fruit <br>";
    }
}

$banana = new Fruit("banana","yellow");
$apple = new Fruit("Apple", "red");
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();


