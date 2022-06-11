
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<?php
		$con = @mysqli_connect('localhost','smolyarb_dzianis','Bacharou1982', 'smolyarb_One');
		$close = @mysqli_close($con);
		if($close) {echo ("вы отключились от MySQL");}
		else {echo('невозможно отключиться от MySQL');};
?>
