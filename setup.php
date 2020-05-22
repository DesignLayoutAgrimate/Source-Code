<?php
function pg_connection_string_from_database_url(){
	extract(parse_url($_ENV["DATABASE_URL"]));
	return "user=$user password=$pass host=$host dbname=" .substr($path,1);
}

	$db = pg_connect(pg_connection_string_from_database_url());
	if(!$db){
		echo  "Error : Unable to open database \n";
	}else{
		echo '<div class="alert alert-info" style="text-align:center;">';
		echo '<strong>Opened database successfully</strong>';
		echo '</div>';
	}
	
	$sql = "CREATE TABLE IF NOT EXISTS MyAccounts (username CHAR(10) PRIMARY KEY NOT NULL,
	password CHAR(50))";
	
	print "$sql \n";
	
	$ret = pg_query($db, $sql);
	if(!$ret){
		echo pg_last_error($db);
	}else{
		echo "Table created successfully\n";
	}
	
	pg_close($db);
?>
