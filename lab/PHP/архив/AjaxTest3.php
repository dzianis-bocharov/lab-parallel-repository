
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<?php
	$test1 = mysqli_connect('localhost','smolyarb_dzianis','Bacharou1982', 'smolyarb_drup1');
	$test2 = mysqli_query($test1, 'SHOW TABLES');
	while ($row = mysqli_fetch_row($test2)){
		echo ($row[0]."<br>");
	;}
	echo("<script>$('#log').height('auto')</script>");	 
?>
