<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
		<link rel="stylesheet" type="text/css" href="../../style1.css">
		<link rel='shortcut icon' href='favicon.ico' type='image/ico'>
	</head>
	<body>
		<form action='create_done.php' method='POST' enctype='multipart/form-data'>
			<h1>�������� ������ ������������</h1>
			<input type='hidden' name='MAX_SIZE_FILE' value='2000000'></input>
			<p><label>1. ���������� <input type='file' name='photo'></label></p>
			<p>2. ��� <input name='user_name''></p>
			<p>3. ������� <input name='age'></p>
			<p>4. ��������� <input name='bio' type='textarea'></p>
			<button type='submit'>�������</button>
		</form>
	</body>
</html>