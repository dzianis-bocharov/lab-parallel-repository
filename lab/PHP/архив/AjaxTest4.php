
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<?php
		$test1 = @mysqli_connect('localhost','smolyarb_dzianis','Bacharou1982');
		$res = mysqli_query($test1, 'SHOW DATABASES');
		while ($row = mysqli_fetch_assoc($res)) {
			if ($row['Database']!='information_schema') {echo ($row['Database'] . "<br>");}
		}
?>
