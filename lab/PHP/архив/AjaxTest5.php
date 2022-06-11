
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<?php
	$test1 = mysqli_connect('localhost','smolyarb_dzianis','Bacharou1982', 'smolyarb_test');
	$test2 = "CREATE TABLE MyGuests(
					id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY  ,
					name VARCHAR(10),
					age VARCHAR(2)
				)";
	$test4 = "DROP TABLE MyGuests3";
	$test5 = "INSERT INTO MyGuests (name, age)
				VALUES('DZIANIS','33')
				";
	$test6 = "SELECT * FROM MyGuests";
	$test3 = mysqli_query($test1, $test6);
//	if($test3) {echo 'ты крут';}
//	else {echo 'ничего не работает';};
	
	while ($row = mysqli_fetch_row($test3)) {echo $row[0].' '.$row[1].' '.$row[2].'<br>';}
	echo("<script>$('#log').height('auto')</script>");	 

//	$sql = "INSERT INTO MyGuests (firstname, lastname, email)
//VALUES ('John', 'Doe', 'john@example.com')";
?>


