<?php
	header('Content-type: text/html; charset=utf-8');
	//include 'initPass.php';
	$file = fopen("password.txt","r");
	$username = $_POST['ID'];
	$hashPass = fgetss($file);
	$password = $_POST['Password'];
	if(password_verify($password, $hashPass))
	{
		echo "<label>Verified!</label>";
	}
	else
		echo "<label>Failed<label>";
	fclose($file);
?> 