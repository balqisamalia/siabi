<?php

include_once("koneksi.php");

if(isset($_POST['update']))
{
$id_brg = $_POST['id_brg'];

$kode_brg	= $_POST['kode_brg'];
$tgl_msk 	= $_POST['tgl_msk'];
$nm_brg		= $_POST['nm_brg'];
$nm_kantor	= $_POST['nm_kantor'];
$jml_brg	= $_POST['jml_brg'];
$hrg_brg	= $_POST['hrg_brg'];
$tot_hrg	= $_POST['tot_hrg'];
$status_brg	= $_POST['status_brg'];

$result	= mysqli_query($connect, "UPDATE barang SET kode_brg = '$kode_brg', tgl_msk = '$tgl_msk', nm_brg = '$nm_brg', nm_kantor = '$nm_kantor',jml_brg = '$jml_brg', hrg_brg = '$hrg_brg' , tot_hrg = '$tot_hrg' , status_brg = '$status_brg' WHERE id_brg = $id_brg");

header("Location: index_data.php");
}
?>


<?php
include_once("koneksi.php");
$id_brg	= $_GET['id_brg'];

$result	= mysqli_query($connect, "SELECT * FROM barang WHERE id_brg = '$id_brg'");

while($data = mysqli_fetch_array($result)) 
{
	$kode_brg	= $data['kode_brg'];
	$tgl_msk 	= $data['tgl_msk'];
	$nm_brg		= $data['nm_brg'];
	$nm_kantor	= $data['nm_kantor'];
	$jml_brg	= $data['jml_brg'];
	$hrg_brg	= $data['hrg_brg'];
	$tot_hrg	= $data['tot_hrg'];
	$status_brg	= $data['status_brg'];
}
?>

<html>
<head>
	<title>Data Barang Iventaris BPR</title>
	<link rel="icon" type="image/jpg" href="../assets/icon.jpg">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</head>
<body>
	<div class="row">
		<div class="container-fuild">
			<div class="row">
				<br>
				<br>
				<div class="col-md-8 col-md-offset-2">
					<br>
					<br>
					<div class="panel panel-default">

						<div class="panel-heading">
							<span class="title"><b>Edit Data Barang <span class="text text-danger"></span></b></span>
						</div>
						<div class="panel-body">
							<form action="edit.php" method="POST" class="form">
								
								<div class="form-group">
									<label class="title">Kode Barang</label>
									<input type="text" name="kode_brg" class="form-control" value=<?php echo $kode_brg;?>>
								</div>
								<div class="form-group">
									<label class="title">Tanggal</label>
									<input type="Date" name="tgl_msk" class="form-control" value=<?php echo $tgl_msk;?>>
								</div>
								<div class="form-group">
									<label class="title">Nama Barang</label>
									<input type="text" name="nm_brg" class="form-control" value=<?php echo $nm_brg;?>>
								</div>

								<div class="form-group">
									<label class="title">Kantor</label>
									<select name="nm_kantor" id="nm_kantor" class="form-control">
								        <option value="Kantor Pusat Semarang"<?php if ($nm_kantor== "Kantor Pusat Semarang") { echo "selected=\"selected\""; } ?>> Kantor Pusat Semarang
								        </option>
								        <option value="Kantor Kas Siliwangi"<?php if ($nm_kantor== "Kantor Kas Siliwangi") { echo "selected=\"selected\""; } ?>> Kantor Kas Siliwangi
								        </option>
								         <option value="Kantor Kas Banyumanik"<?php if ($nm_kantor== "Kantor Kas Banyumanik") { echo "selected=\"selected\""; } ?>> Kantor Kas Banyumanik
								        </option>
								         <option value="Kantor Kas Gang Besen"<?php if ($nm_kantor== "Kantor Kas Gang Besen") { echo "selected=\"selected\""; } ?>> Kantor Kas Gang Besen
								        </option>
								         <option value="Kantor Kas Kelud"<?php if ($nm_kantor== "Kantor Kas Kelud") { echo "selected=\"selected\""; } ?>> Kantor Kas Kelud
								        </option>
								         <option value="Kantor Kas Ngaliyan"<?php if ($nm_kantor== "Kantor Kas Ngaliyan") { echo "selected=\"selected\""; } ?>> Kantor Kas Ngaliyan
								        </option>
								        <option value="Kantor Kas Ketileng"<?php if ($nm_kantor== "Kantor Kas Ketileng") { echo "selected=\"selected\""; } ?>> Kantor Kas Ketileng
								        </option>
								        <option value="Kantor Kas Walter Mangonsidi"<?php if ($nm_kantor== "Kantor Kas Walter Mangonsidi") { echo "selected=\"selected\""; } ?>> Kantor Kas Walter Mangonsidi
								        </option>
								        <option value="Kantor Kas Tlogosari"<?php if ($nm_kantor== "Kantor Kas Tlogosari") { echo "selected=\"selected\""; } ?>>Kantor Kas Tlogosari
								        </option>
								     </select>
								</div>

								<div class="form-group">
									<label class="title">Jumlah Barang</label>
									<input type="number" name="jml_brg" class="form-control" value=<?php echo $jml_brg;?>></input>
								</div>
								<div class="form-group">
									<label class="title">Harga Barang</label>
									<input type="text" name="hrg_brg" class="form-control" value=<?php echo $hrg_brg;?>>
								</div>
								<div class="form-group">
									<label class="title">Total Harga</label>
									<input type="text" name="tot_hrg" class="form-control" value=<?php echo $tot_hrg;?>>
								</div>
								 <div class="form-group">
								 	<label>Status Barang</label>
								 	<div class="radio">
								 		<label>
								 			<input type="radio" name="status_brg" value="Aktif"  <?php if($status_brg =='ya'){ ; ?> checked <?php }?>>Aktif
								 		</label>
								 	</div>
								 	<div class="radio">
								 		<label>
								 			<input type="radio" name="status_brg" value="Penyusutan"  <?php if($status_brg =='tidak'){ ; ?> checked
								 			<?php } ?>>Penyusutan
								 		</label>
								 	</div>
								 </div>
								<div class="modal-footer">
									<a href="#" class="btn btn-warning" onclick="history.back(-1)"><i class="glyphicon glyphicon-arrow-left"></i> Kembali</a>

									<input type="hidden" name="id_brg" value=<?php echo $_GET['id_brg'];?>>

									<button type="submit" name="update" class="btn btn-info"><i class="glyphicon glyphicon-pencil" value="update"></i> Simpan</button>
								</div>
							</form>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	</body>
</html>