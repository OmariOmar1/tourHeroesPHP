<?php

$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt="this is a sample text used to learn how to write in a file\n";
fwrite($myfile,$txt);
$txt="new line of text again\n";
fwrite($myfile,$txt);
fclose($myfile);
