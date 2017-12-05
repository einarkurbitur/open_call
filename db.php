<?php



/*** DATABASE INFO ***/

//localhost
// $host = 'localhost';
// $db   = 'psaction';
// $user = 'root';
// $pass = 'root';
// $charset = 'utf8';


//website psaction.club
$host = 'localhost';
$db   = 'u9734d22250_psaction';
$user = 'u9734d22250_psaction';
$pass = 'ITFnmStC';
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
