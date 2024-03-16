<?php
session_start();
require_once('config.php');


$username = $_POST['username'];
$modified = str_replace(['@', '.'], ['_', '_'], $username);
$password = sha1($_POST['password']);

$sql = "SELECT * FROM users WHERE email = ? AND password = ? LIMIT 1";
$stmtselect  = $db->prepare($sql);
$result = $stmtselect->execute([$username, $password]);

if($result)
{
	$user = $stmtselect->fetch(PDO::FETCH_ASSOC);
	if($stmtselect->rowCount() > 0)
    {
		$_SESSION['userlogin'] = $user;
		echo 'Login Successfull!';
	}
    else
    {
		echo 'Username or Password Was Wrong';		
	}
}
else
{
	echo 'Database Fatal Error!';
}
?>