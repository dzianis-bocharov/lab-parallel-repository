<html>

	<head><meta charset="windows-1251">

		

		<link rel="shortcut icon" href="http://smolyar.by/WEB/favicon.ico" type="image/png">

		
		<link rel="stylesheet" type="text/css" href="../../style1.css">
		<link rel='shortcut icon' href='favicon.ico' type='image/ico'>
		
		<style>
			button, input[type='submit'] {
				background:RGB(145,109,119);
				width:15em; height:5em;
				color: white;
				}
			#log {background:white; width:30em; height:7em; color: black; text-align:left;}
			fieldset {width:30em;}
			#Bag {position:relative; width:29em; height:14em; border: 3px solid white}
			#connect {position:absolute; left:5%; top:1em;}
			#disconnect {position:absolute; left:50%; top:1em;}
			#showTables {position:absolute; left:5%; top:6em;}
			#showDatabases {position:absolute; left:50%; top:6em;}
			#createTable {position:absolute; left:5%; top:11em;}
			#deleteTable {position:absolute; left:50%; top:11em;}
		</style>

		<script type='text/javascript' src='jQuery.js'></script>
		<script>
			$(document).ready(function(){
				$('#create_user').click(function(){window.location = 'create_user.html';});
				$('#show_users').click(function(){window.location = 'show_users.php';});
				$('#signin').click(function(){window.location = 'signin.php';});
				$('#exit').click(function(){window.location = 'exit.php';});
			});
		</script>
		
	</head>

	<body>
		<h1>PHP&MySQL - Test</h1>

		<?php
			//$z1 = mysqli_connect("localhost", "smolyarb_ironman", "Bacharou1982", "smolyarb_test_forum");
			$ftp_server = 'smolyar.by';
			$ftp_user =  'smolyarb';
			$ftp_password = 'ief8Shoo';
			$ftp_connection = ftp_connect($ftp_server);
			$ftp_login = ftp_login($ftp_connection,$ftp_user,$ftp_password);
			$local_file = 'local2.txt';
			$server_file = 'server2.txt';
			ftp_nb_get($ftp_connection,$local_file,$server_file, FTP_ASCII);
			//$file_list = ftp_nlist($ftp_connection,'/ssl/');
			//var_dump($file_list);
			//echo '<br>';
			//print_r($file_list);
		?>

	</body>

</html>