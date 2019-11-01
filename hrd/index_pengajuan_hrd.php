<html>
<head>
	<title src="assets/css/logo.png">Data Barang Iventaris BPR</title>
	<link rel="icon" type="image/jpg" href="../assets/icon.jpg">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</head>
<body>
	 <nav class="navbar navbar-default">
          <div class="container">
            <div class="navbar-header">
              
              <a class="navbar-brand" href="www.bprwm.co.id">BPR WM</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
               <li><a href="index_barang_hrd.php">Data Barang </a></li>
                <li class="active"><a href="index_pengajuan_hrd.php">Data Pengajuan <span class="sr-only">(current)</span></a></li>
                <li><a href="../logout.php">Logout</a></li>
                <li></li>
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
				<form action="proses_search.php" method="get">
					<input type="search" name="cari" placeholder="Nama Barang" >
					<button action="proses_search.php" type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search" value="Cari"  ></i> Cari</button>
 				</form>
					<div class="panel panel-default">
						<div class="panel-heading">
							<span class="title"><b>Pengajuan Barang</b></span>
						</div>
						<div class="panel-body">
							<table class="table table-stripped" width="100%">
								<thead>
									<tr>
										<th>No</th>
										<th>Tanggal</th>
										<th>Nama Barang</th>
										<th>Kantor</th>
										<th>Jumlah</th>
										<th>Total Harga</th>
										<th>Opsi</th>
									</tr>
								</thead>
								<?php
									include 'koneksi.php';

									$lihat	= mysqli_query($connect, "SELECT * FROM pengajuan_brg");
									if (mysqli_num_rows($lihat) == 0) { //jika hasil dari query menampilkan 0 data maka akan memperlihatkan data kosong
										echo '<tr><td colspan="6"><center>Data Kosong!!!</center></td></tr>';
									}else{
									$no 	= 1;
									while($data = mysqli_fetch_array($lihat)) {
								?>
								<tbody>
									<tr>
										<td><?php echo $no;?></td>
										<td><?php echo date("d/m/Y", strtotime($data['tgl_pengajuan']))?></td>
										<td><?php echo $data['nm_brg_pgj']?></td>
										<td><?php echo $data['nm_kantor_pgj']?></td>
										<td><?php echo $data['jml_brg_pgj']?></td>
										<td><?php echo $data['tot_hrg_pgj']?></td>
										<td>
											 <script type="text/javascript">
											 	function cek(){
											 	var msg = confirm("Verifikasi Data");
											 	if(msg==true){
											 		window.location="print_data.php";  
											 	}else{
											 		window.location="index_pengajuan.php";
											 	}
											 }
											</script>
											<a href="view_pengajuan.php?id_pengajuan=<?php echo $data['id_pengajuan']?>" class="btn btn-info btn-xs"><i "></i>View </a>
											<a href="view_pengajuan.php?id_pengajuan=<?php echo $data['id_pengajuan']?>" onclick="cek();" class="btn btn-info btn-xs"><i "></i>Konfirmasi </a>
											<a href="hapus_pengajuan.php?id_pengajuan=<?php echo $data['id_pengajuan']?>" class="btn btn-danger btn-xs"><i class="glyphicon "></i> Tolak</a>
										</td>
									</tr>
								</tbody>
								<?php $no++;}}?>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>