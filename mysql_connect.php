<?php
$user = 'root';
$password = 'root';
$db = 'testing';
$host = '127.0.0.1';
$port = 8889;


$options = [

    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];


$dsn = "mysql:host=$host;port=$port;dbname=$db";

$connection = new PDO($dsn, $user, $password, $options);
var_dump($connection);
