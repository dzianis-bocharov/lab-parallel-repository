<?php
	//echo 'very cool test';
	//setcookie('user_name_test','12345');
	
	require_once 'app_config.php';
	require_once 'database_connection.php';
	require_once 'view.php'; //что это такое?
	
	$error_message = '';
	
	// Если пользователь зарегистрировался, будет установлен cookie-файл user_id;
	if (!isset($_COOKIE['user_id_test'])){
		if(isset($_POST['username'])){
			$username = mysql_real_escape_string($_REQUEST['username']);
			$password = mysql_real_escape_string($_REQUEST['password']);
			// Поиск пользователя.
			$query = sprintf("SELECT user_id, username from users"." ".
				"WHERE username ='%s' AND password = '%s'",
				$username, $password);
			//echo $query;
			//$query = "SELECT user_id, username FROM  `users` WHERE username =  'dzianis' AND PASSWORD =  'Bacharou1982'";	
			//		    SELECT user_id, username from USERS WHERE username ='dzianis' AND password = 'Bacharou1982'
			$results = mysql_query($query);
			if (mysql_num_rows($results)==1){
				$result = mysql_fetch_array($results);
				$user_id = $result['user_id'];
				setcookie('user_id_test',$user_id, time()+360*24*60*60);
				setcookie('user_name_test',$result['username'], time()+360*24*60*60);
				header('Location: show_user.php?user_id='.$user_id);
			} else {
			// Если пользователь не найден, то выдача ошибки.
				$error_message = 'Вы дали неверную комбинацию имя пользователя - пароль';
				//echo 'пользователь не найден';
			}
		}
	// Часть if, относящаяся к ситуации 'Не вошел, как зарегистрированный пользователь'.
	// Начало страницы. Мы знаем, что здесь нет сообщения об успехе или об ошибке, поскольку
	// происходит всего лишь регистрация для входа в приложение.
	page_start('Регистрация', NULL, NULL, $error_message);
?>

<html>

	<head>
		<link rel="stylesheet" type="text/css" href="../../style1.css">
		<link rel='shortcut icon' href='favicon.ico' type='image/ico'>
	</head>
	
	<body>
		<div id='content'>
			<h1>Регистрация в клубе</h1>
			<form id='signin_form' action='<?php echo $_SERVER['PHP_SELF']; ?>' method='POST'>
				<fieldset style='width:40em'>
					<label for='username'>Имя пользователя:</label>
					<input type='text' name='username' id='username' size='20'/>
					<label for='password'>Пароль:</label>
					<input type='password' name='password' id='password' size='20'>
				</fieldset>
				<br>
				<fieldset style='width:40em'>
					<input type='submit' value='Зарегистрироваться'/>
				</fieldset>
			</form>
		</div>
		<div id='footer'><div>
	</body>
<html>

<?php
	} else {
	// Обработка случая, когда зарегистрировавшийся пользователь 
	//перенаправляется на другую страницу, скорее всего на show_user.php.
	//	echo 'все здорово';
		header('Location: show_user.php?user_id='.$_COOKIE['user_id_test']);
	}
?>