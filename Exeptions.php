<?php
//
function divided($up,$bottom){
if($bottom==0){
    throw new Exception("Divided by 0 ");
}
return $up/$bottom;
}
echo divided(1,2);

try {
    echo divided(3,0);
}
catch(Exception $e){
    echo "<br>someone tried to divide by 0<br>";
} finally {
    echo "its fine tho we caught the error<br>";
}


//we can get information about the exeption
function divide($dividend, $divisor) {
    if($divisor == 0) {
        throw new Exception("Division by zero", 1);
    }
    return $dividend / $divisor;
}

try {
    echo divide(5, 0);
} catch(Exception $ex) {
    $code = $ex->getCode();
    $message = $ex->getMessage();
    $file = $ex->getFile();
    $line = $ex->getLine();
    echo "Exception thrown in $file on line $line: [Code $code]
  $message";
}