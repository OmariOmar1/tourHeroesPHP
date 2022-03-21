<?php
$myfile= fopen("learningFile.txt","r") or die("cant read file please try again later !");


//to read a single line
echo fgets($myfile);
echo "<br>";
echo fread($myfile,filesize("learningFile.txt"));
//to check if the file is done
if(feof($myfile)){
    echo "<br> <h1>file done</h1>";
}
fclose($myfile);
