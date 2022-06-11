<?php
	require_once "app_config.php";
	require_once "database_connection.php";
	$user_id = $_REQUEST['user_id'];
	$delete_query = sprintf('DELETE FROM users WHERE user_id = %d' , $user_id);
	mysql_query($delete_query);
	$msg = '”казанный пользователь был удален.';
	header('Location:show_users.php?success_message='. $msg);
	exit();
?>