<html>
	<head>
		<?php //require 'connection.php'; ?>
		<link rel="stylesheet" type="text/css" href="../../style1.css">
		<link rel='shortcut icon' href='favicon.ico' type='image/ico'>
		<style>
			fieldset {width:17em;}
		</style>
		<meta charset="Windows-1251"/>
	</head>
	
	<body>
		<h1>Информация о пользователе</h1>
			<?php
				$con = mysqli_connect("localhost", "smolyarb_dzianis", "Bacharou1982", "smolyarb_One");
				$user_id = 2;
				$sql="SELECT * FROM users WHERE user_id = " . $user_id;				
				$result = mysqli_query($con, $sql);
				if($result) {
					$row = mysqli_fetch_array($result);
					$user_id = $row['user_id'];
					$user_name = $row['user_name'];
					$age = $row['age'];
					$bio = $row['bio'];
				}
				else {
						die("ib,rf j,yfhe;tybz gjkmpjdfntkz c ID {$user_id}");
				}
			?>
			<img src=<?php echo '$image'?>>
			<p>№:&nbsp<?php echo $user_id?></p>
			<p>Имя:&nbsp<?php echo $user_name?></p>
			<p>Возраст:&nbsp<?php echo $age?></p>
			<p>Биография:&nbsp<?php echo $bio?></p>
	</body>
	
</html>