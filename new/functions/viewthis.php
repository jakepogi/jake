<?php
include 'config.php';
header('Access-Control-Allow-Origin: *');
	$result = mysql_query("select * from post ORDER BY id DESC",$con) or die(mysql_error());
	while($data=mysql_fetch_array($result)){
	
	echo '<div id="box1" style="background-color:#f2f2f2; " >';
			echo '<div style="color: #478cfd; " >';
				echo "<h5> Datetime: ".$data['datetime']."</h5>";
				
					echo '<div class ="ui-body ui-corner-al"  style="height:1px; border-bottom: 1px solid #199b7f;">';
				
				echo '</div>';
				
			
				
				echo "<h5>Content: ".$data['content']."</h5>";
			echo	'</div>';
	echo	'</div>';
			echo	'<br>';
	}
?>