<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'myDB';

//* Connect to DataBase
$connect = mysqli_connect($host, $user, $password, $database);

//* If connect is faled
if(!$connect) die('Error connect to database');