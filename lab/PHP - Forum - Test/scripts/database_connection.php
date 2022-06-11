<?php

	require 'app_config.php';
	$z1 = mysqli_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD,DATABASE_NAME)
	or die("<p>Ошибка подключения к базе данных: " .
	mysqli_error() . "</p>");
	echo "<p>Вы подключились к MySQL!</p>";

?>