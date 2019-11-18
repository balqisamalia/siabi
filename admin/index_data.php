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
                <li class="active"><a href="index_data.php">Data Barang <span class="sr-only">(current)</span></a></li>
                <li><a href="index_pengajuan.php">Data Pengajuan</a></li>
                <li><a href="../logout.php">Keluar</a></li>
                <li></li>
              </ul>
            </div>
          </div>
        </nav> 
        <!-- Tabel List Data -->
	<div class="row">
		<div class="container-fuild">
				<div class="col-md-9 col-md-offset-2">
					<form action="proses_search_brg.php" method="get">
					<input type="search" name="cari" placeholder="Cari" >
					<button action="proses_search_brg.php" type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search" value="Cari"  ></i> Cari</button>
 				</form>
				<a href="tambah.php" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
				<br>
					<br><div class="panel panel-default">
						<div class="panel-heading">
							<span class="title"><b>List Data Barang</b></span>
						</div>
						<div class="panel-body">
							<table class="table table-stripped">
								<thead>
									<tr>
										<th>No</th>
										<th>Kode Barang</th>
										<th>Tgl Masuk</th>
										<th>Nama Barang</th>
										<th>Kantor</th>
										<th>Jumlah</th>
										<th>Total Harga</th>
										<th>Status Barang</th>
										<th>Opsi</th>
									</tr>
								</thead>
								<?php
									include 'koneksi.php';

									$lihat	= mysqli_query($connect, "SELECT * FROM barang");
									if (mysqli_num_rows($lihat) == 0) { //jika hasil dari query menampilkan 0 data maka akan memperlihatkan data kosong
										echo '<tr><td colspan="6"><center>Data Kosong!!!</center></td></tr>';
									}else{
									$no 	= 1;
									while($data = mysqli_fetch_array($lihat)) {
								?>
								<tbody>
									<tr>
										<td><?php echo $no;?></td>
										<td><?php echo $data['kode_brg']?></td>
										<td><?php echo date("d/m/Y", strtotime($data['tgl_msk']))?></td>
										<td><?php echo $data['nm_brg']?></td>
										<td><?php echo $data['nm_kantor']?></td>
										<td><?php echo $data['jml_brg']?></td>
										<td><?php echo $data['tot_hrg']?></td>
										<td><?php echo $data['status_brg']?></td>
										<td>
											<a href="view_barang.php?id_brg=<?php echo $data['id_brg']?>" class="btn btn-info btn-xs"><i "></i>View </a>
											<a href="edit.php?id_brg=<?php echo $data['id_brg']?>" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
											<a href="proses_hapus.php?id_brg=<?php echo $data['id_brg']?>" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-erase"></i> Hapus</a>
										</td>
									</tr>
								</tbody>
								<?php $no++;}}?>
							</table>
								<button onClick="print_data()" class="btn btn-info">Cetak</button>
								
								<script>
									function print_data(){
										window.open("print_data.php","_blank");
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