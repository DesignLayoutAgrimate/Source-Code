<!DOCTYPE html>
<html>

<body>
	<div style="width:200px;">
		<h2>Them nguoi dung Postgresql</h2>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		<label>Ho va ten</label>
		<input type="text" name="username" placeholder="Nhap ten tai khoan"
		value="<?php echo $username; ?>">
		<label>Mat khau</label>
		<input type="password" name="password" placeholder="Nhap mat khau"
		value="<?php echo $password; ?>">
		<input type="submit" value="Them moi">
		</form>
	</div>
	
	<?php
		$username=$_POST["username"];
		$password=$_POST["password"];
	
		function pg_connection_string_from_database_url(){
			extract(parse_url($ENV["DATABASE_URL"]));
			return "user=$user password=$pass host=$host dbname=" .substr($path,1);
		}	
		
		$db = pg_connect(pg_connection_string_from_database_url());
		if(!$db){
			echo "Error : Unable to open database\n";
		}else{
			echo "Opened database successfully\n";
		}
		
		$sql = "INSERT INTO MyAccounts (username, password) VALUES ('$username', '$password')";
		
		print"<br>$sql<br>";
		
		$ret = pg_query($db,$sql);
		if(!$ret){
			echo pg_last_error($db);
		}else{
			echo "Insert successfully\n";
		}	
		
		pg_close($db);
	?>

</body>
</html>
