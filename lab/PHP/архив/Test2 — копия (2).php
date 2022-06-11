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

		<script type='text/javascript' src='jquery.js'></script>
		<script>
			$(document).ready(function(){
				$('#connect').click(function(){
					$.get( 'AjaxTest1.php', function( data ) {
						  $( '#log' ).html(data);
					});
				});
				$('#disconnect').click(function(){
					$.get( 'AjaxTest2.php', function( data ) {
						$( '#log' ).html(data);
					});
				});
				$('#showTables').click(function(){
					$.get( 'AjaxTest3.php', function( data ) {
						$( '#log' ).html(data);
					});
				});
				$('#showDatabases').click(function(){
					$.get( 'AjaxTest4.php', function( data ) {
						  $( '#log' ).html(data);
					});
				});
				$('#createTable').click(function(){
					$.get( 'AjaxTest5.php', function( data ) {
						  $( '#log' ).html(data);
					});
				});
				$('#deleteTable').click(function(){
					$.get( 'AjaxTest6.php', function( data ) {
						  $( '#log' ).html(data);
					});
				});
			});
		</script>
		
	</head>

	<body>
		<h1>Код подключения к базе данных</h1>
		<div id='Bag'>
			<button id='connect'>Подключение к базе данных</button>
			<button id='disconnect'>Отключение от MySQL</button>
			<button id='showTables'>Показать список таблиц из базы данных</button>
			<button id='showDatabases'>Показать список баз данных</button>
			<button id='createTable'>Создать таблицу</button>
			<button id='deleteTable'>Показать список таблиц</button>
		</div>
		<fieldset>
			<legend>Сведения</legend>
			<div id='log'></div>
		</fieldset>
		<button>добавить пользователя</button>
	</body>
</html>