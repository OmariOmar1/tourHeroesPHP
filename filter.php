<?php
//VALIDATE AN INTEGER
$str =  "<h1>Hello world!</h1>";
$newString =  filter_var($str,FILTER_SANITIZE_STRING);
echo $newString ."<br>";
//VALIDATE AN INTEGER
$int = 0;

if (filter_var($int, FILTER_VALIDATE_INT) === 0 || filter_var($int, FILTER_VALIDATE_INT) ) {
    echo("Integer is valid <br>");
} else {
    echo("Integer is not valid <br>");
}
//VALIDATE AN IP
$ip = "127.0.0.1";

if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
    echo("$ip is a valid IP address <br>");
} else {
    echo("$ip is not a valid IP address");
}

//validate an email address
$email = "john.doe@e.x.a.m.p.le.com";

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo("$email is a valid email address <br>");
} else {
    echo("$email is not a valid email address");
}
//validate url
$url = "http://www.mybank.com.scamsite.com";

// Remove all illegal characters from a url
$url = filter_var($url, FILTER_SANITIZE_URL);

// Validate url
if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
    echo("$url is a valid URL");
} else {
    echo("$url is not a valid URL");
}