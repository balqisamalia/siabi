<?php 
session_start();
if(isset($_SESSION['level']) == 'hrd'){
header("location:hrd/index_pengajuan_hrd.php");
}else if(isset($_SESSION['level']) =='admin'){
header("location:admin/index_data.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/jpg" href="assets/icon.jpg">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="assets/style.css" rel='stylesheet' type='text/css' />
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700|Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
<body>
	<div class="main">
		<!---start-main-->
		<div class="Masuk">
			<div class="inset">
				<form action="cek_log.php" method="POST">
			        <div>
						<span><label>Username</label></span>
						<span><input type="text" name="username" class="textbox" autofocus="autofocus"></span>
					</div>
					<div>
						<span><label>Password</label></span>
					    <span><input type="password" name="password" class="password"></span>
					</div>
					<hr>
					<div class="sign">
						<div class="submit">
						  <input type="submit" value="Masuk">
						</div>
						<div class="clear"> </div>
					</div>
				</form>
			</div>
		</div>
		<!---//end-main-->
	</div>
</body>
</html>