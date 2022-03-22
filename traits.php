<?php
trait message1{
    public function msg1(){
        echo "welcome to message one ";
    }

    public function msg2(){
        echo "welcome to message two ";
    }
    public function msg3(){
        echo "welcome to message three ";
    }
}

trait message2{
    public function msg1(){
        echo "welcome to message 1 ";
    }
    public static function hi(){
        echo "hi";
    }

    public function msg2(){
        echo "welcome to message 2 ";
    }
    public function msg3(){
        echo "welcome to message 3 ";
    }
}


Class Welcome{
use message2;
}

class Welcome2{
    use message1;
}

Welcome::hi();
echo "<br>";
$obj1 = new Welcome();
$obj2 = new Welcome2();
$obj1->msg1();
echo "<br>";
$obj2->msg1();
