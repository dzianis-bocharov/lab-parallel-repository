<?php

	//header('Location: http://www.example.com/');//header("Location: " . $_SERVER['DOCUMENT_ROOT'] ."/WEB/PHP/show_error.php"); //������� ��� ������
	//header("Location: /WEB/PHP/show_error.php"); //������� ��� ������
	//echo 'cool';
	//exit();
	

	// ��������� ������ �������
	define('DEBUG_MODE', true);
	//��������� ����������� � ���� ������
	define('DATABASE_HOST', "localhost");
	define('DATABASE_USERNAME', "smolyarb_dzianis");
	define('DATABASE_PASSWORD', "Bacharou1982");
	define('DATABASE_NAME', "smolyarb_One");

	// error_reporting(E_ALL); //������� ��� ������
	
	if (DEBUG_MODE) {
		error_reporting(E_ALL);
	} 
	else {
		error_reporting(0);
	};	
	
	// �������� ������� �����
	//define("SITE_ROOT", "/home/smolyarb/public_html/");
	define("SITE_ROOT", $_SERVER['DOCUMENT_ROOT']);
	
	//����������� � ���� �����
	function debug_print($message) {
		if (DEBUG_MODE) {
			echo $message;
		}
	};

	//����������� � ���� �����
	function handle_error($user_error_message, $system_error_message) {
//		header("Location: " . SITE_ROOT . "/WEB/PHP/show_error.php" ."error_message={$user_error_message}&" . "system_error_message={$system_error_message}");

		header("Location:http://smolyar.by/WEB/PHP/show_error.php?" ."error_message={$user_error_message}&" . "system_error_message={$system_error_message}");

//		header("Location:http://smolyar.by/WEB/PHP/show_error.php");

	};
	
?>