<?php
	setcookie('user_id_test',$user_id, time()-360*24*60*60);
	setcookie('user_name_test',$result['username'], time()-360*24*60*60);
	header('Location: Test2.php');
?>