<html>

	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
		
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
		<h1>�������� PHP</h1>
		<button id='signin'>����� � �������</button>
		<br>
		<br>
		<button id='create_user'>�������� ������ ������������</button>
		<br>
		<br>
		<button id='show_users'>�������� ������ ������������ �������������</button>
		<br>
		<br>
		<button id='update_user'>�������� �������� � ������������</button>
		<br>
		<br>
		<button id='exit'>����� �� �������</button>
		<br>
		<br>
		<a href='http://smolyar.by/PersonalWebsite/Home.html'>Personal Website<a>
	</body>

</html>