<html>
<head>
	<title>Daftar Admin BPR WM</title>
	<link rel="icon" type="image/jpg" href="../assets/icon.jpg">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
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
                <li ><a href="index_pengajuan.php">Pengajuan Barang <span class="sr-only">(current)</span></a></li>
                <li class="active"><a href="daftar_admin.php">Daftar Admin</a></li>
                <li><a href="../logout.php">Logout</a></li>
              </ul>
            </div>
          </div>
        </nav> 
	<div class="row">
		<div class="container-fuild">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<br>
					<br>
					<div class="panel panel-default">
						<div class="panel-heading">
							<span class="title"><b>Input Data Admin</b></span>
						</div>
						<div class="panel-body">
							<form action="proses_daftar.php" method="POST" class="form">
								<div class="form-group">
									<label class="title">NIP</label>
									<input type="text" name="nip" class="form-control" placeholder="09201612">
								</div>
								<div class="form-group">
									<label class="title">Nama Lengkap</label>
									<input type="text" name="nm_ad" class="form-control" placeholder="Miminim">
								</div>
								<div class="form-group">
									<label class="title">Tanggal Lahir</label>
									<input type="date" name="tgl_lahir" class="form-control">
								</div>
								<div class="form-group">
									<label class="title">Username</label>
									<input type="text" name="username" class="form-control" placeholder="miminim"></input>
								</div>
								<div class="form-group">
									<label class="title">Password</label>
									<input type="number" name="password" class="form-control" placeholder="******">
								</div> 
								<div class="form-group">
									<label>Jabatan </label>
									<div class="radio">
										<label>
											<input type="radio" name="level" value="Admin" checked>Admin
										</label>
                                     </div>
                                     </div>
								<div class="form-group">
									<label>Jenis Kelamin </label>
									<div class="radio">
										<label>
											<input type="radio" name="jenis_k" value="laki" checked>Laki - Laki
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="jenis_k" value="perempuan">Perempuan
										</label>
                                     </div>
                                     </div>
								<div class="modal-footer">
									<a href="daftar_admin.php" class="btn btn-warning" onclick="history.back(-1)"><i class="glyphicon glyphicon-arrow-left"></i> Kembali</a>
									<button href="proses_daftar.php" type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah</button>
								</div>
							</form>
							<button onClick="print_data()" class="btn btn-info">CETAK</button>
								
								<script>
									function print_data(){
										window.open("../admin/cetak.php","_blank");
									}
								</script>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>