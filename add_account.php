<!DOCTYPE html>
<html>
<style>
input[type=text],select {
	width:100%;
	padding:12px 20px;
	margin:8px 0;
	display:inline-block;
	border:1px solid #ccc;
	border-radius: 4px;
	box-sizing:border-box;
}
input[type=submit] {
	width:100%;
	background-color:#4caf50;
	padding:14px 20px;
	margin: 8px 0;
	border:none;
	border-radius:4px;
	cursor:pointer;
}
input[type=submit]:hover{
	background-color:#45a049;
}
div{
	border-radius:5px;
	background-color:#f2f2f2;
	padding:20px;
}
</style>

<body>
	<div>
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
		$password=$POST["password"];
	
		function pg_connection_string_from_database_url(){
			extract(parse_url($ENV["DATABASE_URL"]));
			return "user=$user password=$pass host=$host dbname=".substr($path,1);
		}	
		
		$db = pg_connect(pg_connection_string_from_database_url());
		if(!$db){
			echo "Error : Unable to open database\n";
		}else{
			echo "Opened database successfully\n";
		}
		
		$sql = INSERT INTO MyAccounts (username, password)
		VALUES ('$username', '$password');
		
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
