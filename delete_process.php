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
					
					$sql = "DELETE FROM MyAccounts WHERE username='" . $_GET["username"] . "'";
					
					echo '<div class="alert alert-warning" style="text-align:center;padding-top:10px;">';
					print "$sql";
					echo '</div>';
					
					$ret = pg_query($db, $sql);
					if(!$ret){
						echo pg_last_error($db);
					}else{
						
						echo '<div class="alert alert-primary" style="text-align:center;padding-top:10px;">';
						echo '<strong>Data Deleted Successfully</strong>';
						echo '</div>';

						echo '<script type="text/javascript">
						redirectTime = "1500";
						redirectURL = "list_account.php";
						setTimeout("location.href = redirectURL;",redirectTime);
						</script>';
					}
					
					pg_close($db);
				?>

				<!-- <br>
				
				<a class="btn btn-sm btn-danger" href="index.php" role="button">Quay lại trang chủ</a> -->
				
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
		</div>
	</div>

</body>
</html>