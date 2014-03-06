<?php

		header('Content-type: text/html; charset=utf-8');
		$username = $_POST['ID'];
		$password = $_POST['Password'];
		$options = [
		'cost' => 11,
		'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
		];
		$hashPassword = password_hash($password, PASSWORD_BCRYPT, $options)."\n";
			$file = fopen("password.txt","w");
			fputs($file, $hashPassword);
			fclose($file);
		header('Location:index.html');

?> 