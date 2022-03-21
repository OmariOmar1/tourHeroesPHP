<?php
// syntax of date :
//date(format,timestamp)

// a timestamp is a sequence of characters
date_default_timezone_set("Asia/Amman");
echo "today is " . date("y/m/d");

//TIME
echo "the time is " . date("h:i:sa");
//make a date from mkdate()
$d=mktime(11,14,54,8,12,2014);// hour , minute , second , month,day,year
echo date("Y",$d);
//make a date from strign with strotime();
//syntax stritime(time,now)
$d1=strtotime("10pm");
echo date("h",$d1);