<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="crud/assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700|Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
 
<body>
	 <nav class="navbar navbar-default">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">SIABI</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="www.bprwm.co.id">BPR WM</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="crud/hrd/index_pengajuan.php">Pengajuan Barang <span class="sr-only">(current)</span></a></li>
                <li class="active"><a href="crud/hrd/daftar_admin.php">Tambah Admin Baru</a></li>
                <li><a href="logout.php">Logout</a></li>
              </ul>
            </div>
          </div>
        </nav>    
        <!-- index HRD --->
	<div class="main">
		<div class="hrd">
			<img src="images/user.png" alt="">
		</div>
		<!---start-main-->
		<div class="login">
			<div class="inset">
			</div>
			<?php 
			if(isset($_GET['page'])){
				$page = $_GET['page'];
				switch ($page) {
					case 'index':
					include "crud/hrd/index_pengajuan.php";
					break;
					default:
					echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
					break;
				}
			}else{
				include "crud/hrd/index_pengajuan.php";
			}?>
		</div>
		<!---//end-main-->
	</div>
</body>
</html>