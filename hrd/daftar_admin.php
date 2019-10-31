<html>
<head>
	<title>Data Barang Iventaris BPR</title>
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
                <li class="active"><a href="daftar_admin.php">Daftar Pengguna</a></li>
                <li><a href="../logout.php">Logout</a></li>
              </ul>
            </div>
          </div>
        </nav>    
	<div class="row">
		<div class="container-fuild">
			<div class="row">

				</form>
				<div class="col-md-8 col-md-offset-2">
					<!-- Belum bisa -->
				<a href="tambah_admin.php" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>Admin</a>
					<br>
					<br>
					<div class="panel panel-default">
						<div class="panel-heading">
							<span class="title"><b>Daftar Pengguna</b></span>
						</div>
						<div class="panel-body">
							<table class="table table-stripped" width="100%">
								<thead>
									<tr>
										<th>No</th>
										<th>NIP</th>
										<th>Nama Admin</th>
										<th>Username</th>
										<th>Password</th>
										<th>Jabatan</th>
										<th>Opsi</th>
									</tr>
								</thead>
								<?php
									include 'koneksi.php';

									$lihat	= mysqli_query($connect, "SELECT * FROM login");
									if (mysqli_num_rows($lihat) == 0) { //jika hasil dari query menampilkan 0 data maka akan memperlihatkan data kosong
										echo '<tr><td colspan="6"><center>Data Kosong!!!</center></td></tr>';
									}else{
									$no 	= 1;
									while($data = mysqli_fetch_array($lihat)) {
								?>
								<tbody>
									<tr>
										<td><?php echo $no;?></td>
										<td><?php echo $data['nip']?></td>
										<td><?php echo $data['nm_ad']?></td>
										<td><?php echo $data['username']?></td>
										<td><?php echo $data['password']?></td>
										<td><?php echo $data['level']?></td>
										<td>
											<a href="hapus_admin.php?id_login=<?php echo $data['id_login']?>" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-erase"></i> Hapus</a>
										</td>
									</tr>
								</tbody>
								<?php $no++;}}?>
							</table>
							
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