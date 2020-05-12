<!DOCTYPE html>
<html>

<body>
	
	<?php
	
		function pg_connection_string_from_database_url(){
			extract(parse_url($_ENV["DATABASE_URL"]));
			return "user=$user password=$pass host=$host dbname=" .substr($path,1);
		}	
		
		$db = pg_connect(pg_connection_string_from_database_url());
		if(!$db){
			echo "Error : Unable to open database\n";
		}else{
			echo "Opened database successfully\n";
		}
		
		$sql = "SELECT * FROM MyAccounts";
		
		print"<br>$sql<br>";
		
		$ret = pg_query($db,$sql);
		if(!$ret){
			echo pg_last_error($db);
			exit();
		}
	?>
	
	<table border="1" cellspacing="1" cellspadding="1">
		<tr>
			<td>Ten tai khoan</td>
			<td>Mat khau</td>
		</tr>
		<?php
		while($myrow = pg_fetch_assoc($ret)){
		print("<tr><td>%s</td> <td>%s</td></tr>", $myrow['username'],$myrow['password']);
		}
		pg_close($db);
		?>
	</table>
	<br> <a href="index.php">Trang chu </a>

</body>
</html>
