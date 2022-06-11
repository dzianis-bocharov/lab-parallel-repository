<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
		<link rel="stylesheet" type="text/css" href="../../style1.css">
		<link rel='shortcut icon' href='favicon.ico' type='image/ico'>
	</head>
	<body>
	
		<?php
			//извлечение сведений о пользователе
			$user_id = $_REQUEST['user_id'];
			
			require_once "app_config.php";
			require_once "database_connection.php";
			$select_query = 'SELECT * FROM users WHERE user_id = ' . $user_id;
			$result = mysql_query($select_query);
			if ($result){
				$row = mysql_fetch_array($result);
				$first_name = $row['first_name']; 
				$last_name = $row['last_name'];
				$user_image = str_replace( $_SERVER['DOCUMENT_ROOT'], '', $row['user_pic_path']);
				$bio = $row['bio'];
				$email = $row['email'];
				$facebook = $row['facebook_url'];
				$twitter = $row['twitter_handle'];
				$image_id = $row['profile_pic_id'];
			}
			else {
				die("Ошибка обнаружения пользователя с ID" . $user_id);
			};
		?>
		
		<h1>Профиль</h1>
		<h2><?php echo $first_name . ' ' . $last_name ?></h2>
		<p><img src = 'show_image.php?image_id=<?php echo $image_id;?>' style = 'width:15em'></p>
		<p><?php echo $bio; ?></p>
		<p><u>Контактная информация:</u></p>
		<ul>
			<li><?php echo $email; ?></li>
			<li><?php echo $facebook; ?></li>
			<li><?php echo $twitter; ?></li>
		</ul>
		<a href = 'Test2.php'><button>Вернуться на главную страницу</button></a>
	</body>
</html>