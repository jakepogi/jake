<?php include 'config.php' ?>
<?php

	$a = $_GET['datetime'];
	$a1 = $_GET['content'];
	
	mysql_query("insert into post(content,datetime) 
						values('".$a1."','".$a."')");
	
?>