<?php
	
	require_once "app_config.php";
	require_once "database_connection.php";
	require_once "view.php";
	require_once "authorize.php";

	if(isset($_REQUEST['success_message'])){
		$msg = $_REQUEST['success_message'];
	}
	else{
		$msg = NULL;
	};

	$select_users = 'SELECT user_id, first_name, last_name, email FROM users';
	$result = mysql_query($select_users);
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
		<link rel="stylesheet" type="text/css" href="../../style1.css">
		<link rel='shortcut icon' href='favicon.ico' type='image/ico'>
		<script type='text/javascript'>
			function delete_user(user_id) {
				if (confirm('Вы уверены, что хотите удалить этого пользователя?' + '\nВернуть его уже не удастся!')) {
					window.location = 'delete_user.php?user_id=' + user_id;					
				};
			};
		</script>
		<script>
			<?php 

				//if (isset($msg)){ ?>
				//window.onload = function() {alert('<?php echo $msg;?>');}
			<?php //}; ?>
		</script>
		
		
	</head>
	<body>
		<?php 

				$test = NULL;
				echo display_messages($msg,$test);
		?>
		<h1>Пользователи</h1>
		<ul>
			<?php
				while ($user = mysql_fetch_array($result)) {
					$user_row = sprintf("<li><a href='show_user.php?user_id=%d'>%s %s</a>".
					"(<a href='mailto:%s'=>%s</a>)".
					"<a href='javascript:delete_user(%d)'><img src='Delete.png' style='width:1em'></a></li>" , 
					$user['user_id'], $user['first_name'], $user['last_name'], $user['email'], $user['email'], $user['user_id']);
					echo $user_row;
				};
			?>
		</ul>
		<br>
		<a href = 'Test2.php'><button>Вернуться на главную страницу</button></a>
	</body>
</html>