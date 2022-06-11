<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
		<link rel="stylesheet" type="text/css" href="../../style1.css">
		<link rel='shortcut icon' href='favicon.ico' type='image/ico'>
	</head>
	<body>
		<?php
			$error_message = $_REQUEST['error_message'];
			$system_error_message = $_REQUEST['system_error_message'];
			echo $error_message .'<br>'. $system_error_message . '<br>';
		?>
	</body>
</html>