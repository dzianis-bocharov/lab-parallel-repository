<!DOCTYPE html>
<html>

	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

		<style>
			body {
				background-color: grey;
				color: white
			}
			div#suck {
				color: white;
				border-style: solid;
				border-color: white;
				width:200px;
				height:125px;
				padding:5px;
			}
			span#test789 {
				text-decoration:underline;
			}
			*.consoleTest {
				background-color: white;
				color: black;
				width: 400px;
				height: 100px;
			}
			div#zzz {
				border: solid 2px;
				padding: 10px;
				width: 410px;
				height: 400px;
			}
			span#ggg {
				font-weight: bold;
				font-size:18px;
				text-decoration: underline;
			}
			div#uuu {
				background-color: #cc66ff;
			}
			textarea#query_text {
				resize: none;
			}
			input.query_buttons {
				width: 150px;
			}
		</style>

		<link rel="shortcut icon" href="http://smolyar.by/WEB/favicon.ico" type="image/png">

		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

	</head>

	<body>

		<h1>Код форума на PHP&MySQL</h1>

		<div id="suck">
				<form>
					<span id='test789'>Авторизация</span>
					<br>
					Имя пользователя
					<br> 
					<input type='text'>
					<br>
					Пароль
					<br>
					<input type='text'>
					<br>
					<input type='submit' value='Войти'>
				</form>
		</div>

		<br>

		<form action='scripts/run_query.php' method='POST'>
			<div id='zzz'>
				<p><span id='ggg'>КОНСОЛЬ</span></p>
				<p>Запрос</p>
					<textarea class="consoleTest" id='query_text' name='query'></textarea>
				<br>
				<input  class='query_buttons' type='submit' value='Запуск запроса'/>
				<input class='query_buttons' type='submit' value='Reset'/>
				<p>Результат</p>
				<div id='uuu' class='consoleTest'></div>	
			</div>
		</form>	

	</body>

</html>