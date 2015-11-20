<?php
include './config.php';
if($_COOKIE[$password]);
else
{
	header('location: ./'.$authPage);
	die();
}
?>

