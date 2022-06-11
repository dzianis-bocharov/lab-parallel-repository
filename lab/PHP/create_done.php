<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
		<link rel="stylesheet" type="text/css" href="../../style1.css">
		<link rel='shortcut icon' href='favicon.ico' type='image/ico'>
	</head>
	<body>
		<?php
			error_reporting(E_ALL);
			$con = mysqli_connect("localhost", "smolyarb_dzianis", "Bacharou1982", "smolyarb_One");
			
			//if(is_uploaded_file($_FILES["photo"]["tmp_name"])){echo 'файл на сервере <br>';};
			
			$target_dir = "uploads/";
			$target_file = $target_dir . $_FILES["photo"]["name"];
			move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
			$name = $_REQUEST['user_name'];
			$age = $_REQUEST['age'];
			$bio = $_REQUEST['bio'];
			$sql="INSERT INTO users(user_name, age, bio)"."VALUES ('{$name}','{$age}','{$bio}');";
			mysqli_query($con,$sql);
		?>
		новый пользователь создан
		<form action='Test2.php'>
			<button type=submit>вернуться на главную страницу</button>
		</form>
	</body>
</html>