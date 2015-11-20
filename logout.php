<?php
include './config.php';
if($_COOKIE[$password])
	setcookie($password);
echo "Logout succeed.";
?>

