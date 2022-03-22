<?php
// Parent class
interface  Car {
     public function intro();
}

// Child classes
class Audi implements Car {
    public $name ="audi";

    public function intro()  {
        return "Choose German quality! I'm an $this->name!";
    }
}
$car1 = new Audi();
echo $car1 ->intro();