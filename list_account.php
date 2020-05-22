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
<body>

	<div class="container" style="margin-top:10px;">
		<div class="row">
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

				<?php
	
					function pg_connection_string_from_database_url(){
						extract(parse_url($_ENV["DATABASE_URL"]));
						return "user=$user password=$pass host=$host dbname=" .substr($path,1);
					}	
					
					$db = pg_connect(pg_connection_string_from_database_url());
					if(!$db){
						echo "Error : Unable to open database\n";
					}else{
						echo '<div class="alert alert-info" style="text-align:center;padding-top:10px;">';
						echo '<strong>Opened database successfully</strong>';
						echo '</div>';
					}
					
					$sql = "SELECT * FROM MyAccounts";
					
					echo '<div class="alert alert-warning" style="text-align:center;padding-top:10px;">';
					print "$sql";
					echo '</div>';
					
					$ret = pg_query($db,$sql);

					if(!$ret){
						echo '<div class="alert alert-info" style="text-align:center;padding-top:10px;">';
						echo pg_last_error($db);
						echo '</div>';
						exit();
					}
				?>


				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Username</th>
							<th>Password</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php
							while($myrow = pg_fetch_assoc($ret)){
								printf("<tr><td>%s</td> <td>%s</td></tr>", 
								$myrow['username'],$myrow['password']);
							}
							pg_close($db);
						?>
					</tbody>
				</table>



				
				<br>
				<a class="btn btn-sm btn-danger" href="index.php" role="button">Quay lại trang chủ</a>
				
			</div>
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
		</div>
	</div>

</body>
</html>
