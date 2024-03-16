<?php 

$db_user = "Username";
$db_pass = 'Password';
$db_name = "Servername";

$db = new PDO('mysql:host=sql200.epizy.com;dbname='. $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>