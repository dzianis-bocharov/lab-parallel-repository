<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
		<link rel="stylesheet" type="text/css" href="../../style1.css">
		<link rel='shortcut icon' href='favicon.ico' type='image/ico'>
	</head>
	<body>
		<form action='create_done.php' method='POST' enctype='multipart/form-data'>
			<h1>Создание нового пользователя</h1>
			<input type='hidden' name='MAX_SIZE_FILE' value='2000000'></input>
			<p><label>1. фотография <input type='file' name='photo'></label></p>
			<p>2. имя <input name='user_name''></p>
			<p>3. возраст <input name='age'></p>
			<p>4. биография <input name='bio' type='textarea'></p>
			<button type='submit'>создать</button>
		</form>
	</body>
</html>