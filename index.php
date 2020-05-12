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
		<form action="welcome_get.php" method="get">
			<label>Ho va ten</label>
			<input type="text" name="fullname" placeholder="Nhap ho va ten">
			<label>Dia chi</label>
			<input type="text" name="address" placeholder="Nhap dia chi">
			<label>Email</label>
			<input type="text" name="email" placeholder="Nhap email">
			<input type="submit" value="Gui">
		</form>
	</div>
</body>
</html>
