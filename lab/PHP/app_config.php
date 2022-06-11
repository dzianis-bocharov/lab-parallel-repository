<?php

	//header('Location: http://www.example.com/');//header("Location: " . $_SERVER['DOCUMENT_ROOT'] ."/WEB/PHP/show_error.php"); //удалить эту строку
	//header("Location: /WEB/PHP/show_error.php"); //удалить эту строку
	//echo 'cool';
	//exit();
	

	// ”становка режима отладки
	define('DEBUG_MODE', true);
	// онстанты подключени€ к базе данных
	define('DATABASE_HOST', "localhost");
	define('DATABASE_USERNAME', "smolyarb_dzianis");
	define('DATABASE_PASSWORD', "Bacharou1982");
	define('DATABASE_NAME', "smolyarb_One");

	// error_reporting(E_ALL); //удалить эту строку
	
	if (DEBUG_MODE) {
		error_reporting(E_ALL);
	} 
	else {
		error_reporting(0);
	};	
	
	//  орневой каталог сайта
	//define("SITE_ROOT", "/home/smolyarb/public_html/");
	define("SITE_ROOT", $_SERVER['DOCUMENT_ROOT']);
	
	//разобратьс€ с этим кодом
	function debug_print($message) {
		if (DEBUG_MODE) {
			echo $message;
		}
	};

	//разобратьс€ с этим кодом
	function handle_error($user_error_message, $system_error_message) {
//		header("Location: " . SITE_ROOT . "/WEB/PHP/show_error.php" ."error_message={$user_error_message}&" . "system_error_message={$system_error_message}");

		header("Location:http://smolyar.by/WEB/PHP/show_error.php?" ."error_message={$user_error_message}&" . "system_error_message={$system_error_message}");

//		header("Location:http://smolyar.by/WEB/PHP/show_error.php");

	};
	
?>