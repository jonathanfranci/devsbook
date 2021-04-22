<?php

session_start();

$base = 'http://localhost/devsbookoo';

$db_name = 'devsbook';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';


$pdo = new PDO("mysql:db_name=".$db_name.";host=".$db_host,$db_user,$db_pass);


?>



