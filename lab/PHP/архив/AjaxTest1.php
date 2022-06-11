
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<?php
	require ('scripts/app_config.php'); 
	$test1 = @mysqli_connect(DATABASE_HOST1,USERNAME,PASSWORD,DATABASE_NAME )
		or die('невозможно подключиться к базе данных');
	if($test1) {echo("вы подключились к базе данных 'smolyarb_drup1'<br>");}
?>
