<?php
	mysql_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD);
	mysql_select_db(DATABASE_NAME)
		or handle_error("�������� �������� � ������������� ����� ���� ������.",mysql_error());
?>