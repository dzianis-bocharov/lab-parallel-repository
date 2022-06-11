<html>

	<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1251">

		<link rel="stylesheet" type="text/css" href="../../style1.css">
		<link rel='shortcut icon' href='favicon.ico' type='image/ico'>
		<!-- <script type='text/javascript' src='../../jquery.js'></script> -->
		<script type='text/javascript' src='jquery.js'></script>
		<style>
			button, input[type='submit'] {
				background:RGB(145,109,119);
				width:15em; height:5em;
				color: white;
				}
			#log {background:white; width:30em; height:3em; color: black;}
		</style>

		<script type='text/javascript' src='jquery.js'></script>
		<script>
			function clear(){$("#log").html("BLEAT");};
		</script>
		<script>
				$(document).ready(function(){
					$(window).unload(function(){
					$("#log").html("cool");
					});
//					alert("Событие unload было вызвано!");
				});
		</script>
		
	<head>

		<?php
				// unset($_POST['my_button1']);
				// unset($_POST['my_button2']);
		?>

	
	<body>
		<?php
//			unset($_POST['my_button']);
		?>

		<div>
			<h1>Код подключения к базе данных</h1>
			<form action="" method='post'>
				<input type='submit' name='my_button1' value='Подключиться'/>
				<br>
				<br>
				<input type='submit' name='my_button2' value='Отключение'/>
				<br>
				<br>
				<div id='log'>
				</div>
			</form>
		</div>
		<br>
		<?php
			if (isset($_POST['my_button1'])) {
				$a = "localhost";
				$b = "smolyarb_dzianis";
				$c = "Bacharou1982";
				mysql_connect($a, $b, $c );
				echo '<script>$("#log").html("Вы подключены к базе данных!!!")</script>';
				}
			if (isset($_POST['my_button2'])) {
				$a = "localhost";
				$b = "smolyarb_dzianis";
				$c = "Bacharou1982";
				$link = mysql_connect($a, $b, $c );
				mysql_close($link);
				echo '<script>$("#log").html("Вы отключены от базы данных!!!")</script>';
				unset($_POST['my_button2']);
				}
		?>
		<?php
				unset($_POST['my_button1']);
				unset($_POST['my_button2']);
		?>
	</body>

</html>