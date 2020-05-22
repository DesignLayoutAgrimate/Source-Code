<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cloud Computing</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body >

	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

				<?php
					function pg_connection_string_from_database_url(){
						extract(parse_url($_ENV["DATABASE_URL"]));
						return "user=$user password=$pass host=$host dbname=" .substr($path,1);
					}

					$db = pg_connect(pg_connection_string_from_database_url());
					if(!$db){
						echo  "Error : Unable to open database \n";
					}else{
						echo '<div class="alert alert-info" style="text-align:center;padding-top:10px;">';
						echo '<strong>Opened database successfully</strong>';
						echo '</div>';
					}
					
					$sql = "CREATE TABLE IF NOT EXISTS MyAccounts (username CHAR(10) PRIMARY KEY NOT NULL,
					password CHAR(50))";
					
					echo '<div class="alert alert-warning" style="text-align:center;padding-top:10px;">';
					echo '<strong>$sql</strong>';
					echo '</div>';
					
					$ret = pg_query($db, $sql);
					if(!$ret){
						echo pg_last_error($db);
					}else{
						
						echo '<div class="alert alert-primary" style="text-align:center;padding-top:10px;">';
						echo '<strong>Table created successfully</strong>';
						echo '</div>';
					}
					
					pg_close($db);
				?>
				
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
		</div>
	</div>

</body>
</html>