<?php


include 'koneksi.php';
$result = mysqli_query($connect, "SELECT * FROM nama_kantor group by kota");
$firstResult = mysqli_query($connect, "SELECT kota FROM nama_kantor order by kota LIMIT 1");
$kota = mysqli_fetch_array($firstResult)[0];

?>

<html>
<head>
	<title>Data Barang Iventaris BPR</title>
	<link rel="icon" type="image/jpg" href="../assets/icon.jpg">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
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
                <li class="active"><a href="index_data.php">Data Barang <span class="sr-only">(current)</span></a></li>
                <li><a href="index_pengajuan.php">Data Pengajuan</a></li>
                <li><a href="../logout.php">Keluar</a></li>
                <li></li>
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
							<span class="title"><b>Tambah Data Barang</b></span>
						</div>
						<div class="panel-body">
							<form action="proses_tambah.php" method="POST" class="form">
								<div class="form-group">
									<label class="title">Kode Barang</label>
									<input type="text" name="kode_brg" class="form-control" value="<?php echo round(microtime(true)*1000);?>">
								</div>
								<div class="form-group">
									<label class="title">Nama Barang</label>
									<input type="text" name="nm_brg" class="form-control" placeholder="Nama Barang">
								</div>
								<div class="form-group">
									<label class="title">Kota</label>
									<select data-placeholder="Pilih Kota" name="nm_kota" class="form-control" onchange="getKantor(this.value);">
										<?php 
											while($kantor = mysqli_fetch_array($result)){
												echo "<option value = '".$kantor["kota"]."'>".$kantor["kota"]."</option>";
										}
										?>

									</select>
									<label class="title">Nama Kantor</label>
									<select data-placeholder="Nama Kantor.." name="nm_kantor" class="form-control" id="selectKantor">

									</select>
								</div>

								<script>
									$(document).ready( function () {
										getKantor("<?php echo $kota ?>");
									});
									function getKantor(option){
										var $select = $('#selectKantor');
										$select.empty();

										var url = "proses_kantor.php?kota=" + option;
										$.get(url, function(data, status){
											var response = JSON.parse(data);
											console.log(response)
											$.each(response,function(key, value) {
												$select.append("<option value='" + value.nama_kntr + "'>" + value.nama_kntr + "</option>");
											})
										});
									}
								</script>
								<div class="form-group">
									<label class="title">Jumlah Barang</label>
									<input type="text" name="jml_brg" class="form-control"></input>
								</div>
								<div class="form-group">
									<label>Satuan </label>
									<div class="radio">
										<label>
											<input type="radio" name="sat_brg" value="pcs" checked >Pcs
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="sat_brg" value="pack">Pack
										</label>
                                     </div>
									<div class="radio">
										<label>
											<input type="radio" name="sat_brg" value="unit">Unit
										</label>
                                     </div>
                                     </div>
								<div class="form-group">
									<label class="title">Harga Barang</label>
									<input type="number" name="hrg_brg" class="form-control" placeholder="50000">
								</div>  
								<div class="form-group">
									<label>Status </label>
									<div class="radio">
										<label>
											<input type="radio" name="status_brg" value="Aktif" checked>Aktif
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="status_brg" value="Penyusutan">Penyusutan
										</label>
                                     </div>
                                     </div>
								<div class="modal-footer">
									<a href="#" class="btn btn-warning" onclick="history.back(-1)"><i class="glyphicon glyphicon-arrow-left"></i> Kembali</a>
									<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah</button>
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
