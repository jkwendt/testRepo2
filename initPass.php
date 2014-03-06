<?php
	$file = fopen("password.txt","w");
	echo "<label> In ITIT</label>";
	
	$options = [
    'cost' => 11,
    'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
	];
	$hashPassword = password_hash("password", PASSWORD_BCRYPT, $options)."\n";
	echo fputs($file, $hashPassword);
	fclose($file);
?> 