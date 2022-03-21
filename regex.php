<?php
$pattern = "/dashboard/i";
$expression = "/dashboard/i aaaaaaa a a a a a  a a a a  a a aaaaaaaaaaaaaaadashboardssssssssssss /AdaAshboardA/A dashboard board DASHBOARD  ";
ECHO preg_match($pattern,$expression)."<br>";
echo preg_match_all($pattern,$expression)."<br>";
echo preg_replace($pattern,"omar",$expression);