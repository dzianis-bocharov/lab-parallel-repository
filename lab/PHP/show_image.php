<?php
	require_once "app_config.php";
	require_once "database_connection.php";

	try {
		if (!isset($_REQUEST['image_id'])) {
			handle_error('�� ������� ����������� ��� ��������', '����.');		
		}
		$image_id = $_REQUEST['image_id'];	// ������ ���������� ��������?
		$select_query = sprintf('SELECT * FROM images WHERE image_id = %d', $image_id);
		$result = mysql_query($select_query);
		
		if (mysql_num_rows($result)==0){
			handle_error('����������� ����������� ����� ����������.','�� ������� ����������� � ID' . $image_id . '.' );
		}
		$image = mysql_fetch_array($result);
		
		header('Content-type:' . $image['mime_type']);
		header('Content-length:' . $image['file_size']);
		echo $image['image_data'];
	} catch (Exception $exc) {
		handle_error('��� �������� ������ ����������� ��������� ����.', '������ ��� �������� �����������', $exc -> getMessage());
	}
?>