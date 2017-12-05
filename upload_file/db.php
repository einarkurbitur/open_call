<?php

/*** DATABASE INFO ***/
$host = 'localhost';
$db   = 'ps_action_club';
$user = 'root';
$pass = 'root';
$charset = 'utf8';

/*** CONNECT TO MYSQL ***/
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = array(
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
	PDO::ATTR_EMULATE_PREPARES => false,
);
$db = new PDO($dsn, $user, $pass, $opt);
?>
