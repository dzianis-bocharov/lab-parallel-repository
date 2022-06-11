<?php

	require '../scripts/database_connection.php';


	$query_text = $_REQUEST['query'];
	$result = mysqli_query($z1,$query_text);
	if (!$result) {
	die("<p>Ошибка при выполнении SQL-запроса" . $query_text . ": " .
		mysqli_error($z1) . "</p>");
	}
	echo "<p>Результаты вашего запроса:</p>";
	echo "<ul>";
	//while ($row = mysql_fetch_row($result)) {
	//	echo "<li>{$row[0]}</li>";
	//}
	echo "</ul>";

?>