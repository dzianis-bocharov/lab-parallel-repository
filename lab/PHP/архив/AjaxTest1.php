
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<?php
	require ('scripts/app_config.php'); 
	$test1 = @mysqli_connect(DATABASE_HOST1,USERNAME,PASSWORD,DATABASE_NAME )
		or die('���������� ������������ � ���� ������');
	if($test1) {echo("�� ������������ � ���� ������ 'smolyarb_drup1'<br>");}
?>
