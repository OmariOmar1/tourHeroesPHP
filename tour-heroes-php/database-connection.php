<?php
// to connect to a database we use
//parameters
$dbServerName ="127.0.0.1";
$dbUserName = "root";
$dbPassword="";
$dbName= "tour_heroes";
/*
 * to connect to a database using pdo we use a dsn
 * */
$dsn = "mysql:host=$dbServerName;dbname=$dbName;charset=utf8mb4";
//options are optional in a db
$dbOptions = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
//to connect to the db we create an object using the PDO class
try {
    $pdo = new PDO($dsn, $dbUserName, $dbPassword, $dbOptions);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
