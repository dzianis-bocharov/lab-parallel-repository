<?php
	define('VALID_USERNAME','admin');
	define('VALID_PASSWORD','super_secret');
	
	if ((!isset($_SERVER['PHP_AUTH_USER']))||(!isset($_SERVER['PHP_AUTH_PW']))
		||($_SERVER['PHP_AUTH_USER'] != VALID_USERNAME)||($_SERVER['PHP_AUTH_PW'] != VALID_PASSWORD))
	{
		header('HTTP/1.1 401 Unauthorized');
		header("WWW-Authenticate: Basic realm = 'The Social Site'");
		exit('«Здесь нужно указать верное имя пользователя и пароль. ' . 
		'прохордите дальше, вам здесь нечего смотреть.');
	};
?>