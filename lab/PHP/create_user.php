<?php

	require_once "app_config.php";
	require_once "database_connection.php";
	
	//������ ������ � ����������, ��������� � �������������, �������� ��������
	$upload_dir = SITE_ROOT . '/WEB/PHP/uploads/'; //��������;
	$image_fieldname = 'user_pic';
	
	
	
	//������������� PHP-������ �������� ������
	$php_errors = array(1 => '�������� ������������ ������ �����, ��������� � php.ini',
					2 => '�������� ������������ ������ �����, ��������� � ����� HTML',
					3 => '���� ���������� ������ ����� �����',
					4 => '���� ��� �������� �� ��� ������');

	$first_name = trim($_REQUEST['first_name']);
	$last_name = trim($_REQUEST['last_name']);
	$email = trim($_REQUEST['email']);
	$bio = trim($_REQUEST['bio']);
	$facebook_url = str_replace('facebook.org', 'facebook.com', trim($_REQUEST['facebook_url']));
	$position = strpos($facebook_url, 'facebook.com');
	$username = trim($_REQUEST['username']);
	$password = trim($_REQUEST['password']);

	if ($position === false) {
		$facebook_url = 'http://www.facebook.com/' . $facebook_url;
	};
	
	$twitter_handle = trim($_REQUEST['twitter_handle']);
	$twitter_url = 'http://www.twitter.com/';
	$position = strpos($twitter_handle, '@');
	if ($position === false ){
		$twitter_url = $twitter_url . $twitter_handle;
	}
	else {
		$twitter_url = $twitter_url . substr($twitter_handle,$position+1);
		echo '�������� #1';
	};


	
	
	
	//echo mysql_insert_id();
	
	//error_reporting(E_ALL);//������� ��� ������;
	
	
	//�������� ���������� ������ ��� �������� �������������
	($_FILES[$image_fieldname]['error']==0) 
		or handle_error('������ �� ����� �������� ��������� ���� �����������', $php_errors[$_FILES[$image_fieldname]['error']]);
	
	//�������� �� ���� ���� ����������� ���������� ��������?
	(@is_uploaded_file($_FILES[$image_fieldname]['tmp_name']))
		or handle_error('�� ���������� ��������� ��������������� ��������. �����!' . ' ������ �� ��������: ���� ��������� ' . "'{$_FILES[$image_fieldname]['tmp_name']}'");
		
	//������������� �� ��� �����������?
	(@getimagesize($_FILES[$image_fieldname]['tmp_name']))
		or handle_error('�� ������� ���� ��� ������ ����'."'{$_FILES[$image_fieldname]['tmp_name']}'".', ������� �� �������� ������������.' );
		
	//������������ ����� ����������� �����.
	$now = time();
	while(file_exists($upload_filename = $upload_dir . $now . $_FILES[$image_fieldname]['name'])){$now++;};

	//������� ����������� 
	$image = $_FILES[$image_fieldname];
	$image_filename = $image['name'];
	$image_info = getimagesize($image['tmp_name']);
	$image_mime_type = $image_info['mime'];
	$image_size = $image['size'];
	$image_data = file_get_contents($image['tmp_name']);
	$insert_image_sql = sprintf("INSERT INTO images 
		(filename, mime_type, file_size, image_data)" .	
		"VALUES ('%s', '%s', '%d', '%s')",
		mysql_real_escape_string($image_filename),
		mysql_real_escape_string($image_mime_type),
		mysql_real_escape_string($image_size),
		mysql_real_escape_string($image_data));
	
	
	if (!mysql_query($insert_image_sql)) {echo 'fail';};
		$profile_pic_id = mysql_insert_id();
	
	@move_uploaded_file($_FILES[$image_fieldname]['tmp_name'], $upload_filename)
		or handle_error("�������� �������� ���������� ������ ����������� � ��� ���������� �����." , "������, ��������� � ������� ������� ��� ����������� ����� � {$upload_filename}");
		

	
		//echo mysql_insert_id() . '<br>';

		
	//������� ��� � �������� ������� ��� ���������������� �����������
	$insert_sql = "INSERT INTO users (first_name, last_name, bio, twitter_handle, facebook_url, email, profile_pic_id, username, password)" . 
			"VALUES ('{$first_name}','{$last_name}', '{$bio}','{$twitter_handle}', '{$facebook_url}', '{$email}', '{$profile_pic_id}', '{$username}', '{$password}')";
			
	//������� ������������ � ���� ������
	if (!mysql_query($insert_sql)) {echo '������ �� �������� <br>';
		exit();};

//		echo mysql_insert_id();

	
	//��������������� ������������ �� ��������, ������������ ���������� � ������������.
	header("Location: show_user.php?user_id=" . mysql_insert_id());
	exit();
?>