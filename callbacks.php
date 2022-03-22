<?php
function my_callback(int $item){
    return strlen($item);
}
$strings = ["apple", "orange","banana", "coconut"];
$length = array_map("my_callback",$strings);
print_r($length);

$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map( function($item) { return strlen($item); } , $strings);
print_r($lengths);