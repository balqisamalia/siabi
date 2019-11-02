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
                <li class="active"><a href="index_data.php">Data Barang <span class="sr-only">(current)</span></a></li>
                <li><a href="index_pengajuan.php">Pengajuan</a></li>
                <li><a href="../logout.php">Logout</a></li>
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
									<input type="text" name="kode_brg" class="form-control" placeholder="BP10">
								</div>
								<div class="form-group">
									<label class="title">Tanggal</label>
									<input type="date" name="tgl_msk" class="form-control">
								</div>

								<div class="form-group">
									<label class="title">Nama Barang</label>
									<input type="text" name="nm_brg" class="form-control" placeholder="Nama Barang">
								</div>
								<div class="form-group">
									<label class="title">Kantor</label>
									<select data-placeholder="Nama Kantor.." name="nm_kantor" class="form-control">
										<option>-- Kantor Semarang --</option>
                						<option value="smg pusat">Kantor Pusat Semarang</option>
                						<option value="smg siliwangi">Kantor Kas Siliwangi</option>
		                				<option value="smg banyumanik">Kantor Kas Banyumanik</option>
		                				<option value="smg gang besen">Kantor Kas Gang Besen</option>
		                				<option value="smg kelud">Kantor Kas Kelud</option>
		                				<option value="smg mijen">Kantor Kas Mijen</option>
		                				<option value="smg ngaliyan">Kantor Kas Ngaliyan</option>
		                				<option value="smg ketileng">Kantor Kas Ketileng</option>                	
		                				<option value="smg walter mangonsidi">Kantor Kas Walter Mangonsidi</option>
		                				<option value="smg tlogosari">Kantor Kas Tlogosari</option>
		                				<option>-- Kantor Kendal --</option>
		                				<option value="kdl kendal">Kantor Cabang Kendal</option>
		                				<option value="kdl cepiring">Kantor Kas Cepiring</option>
		                				<option value="kdl pangadon">Kantor Kas Pengadon</option>
		                				<option value="kdl kaliwungu">Kantor Kas Kaliwungu</option>
		                				<option>-- Kantor Weleri --</option>
		                				<option value="wrl1 cbg weleri">Kantor Cabang Weleri</option>
		                				<option>-- Kantor Kudus --</option>
		                				<option value="kds1 cbg kudus">Kantor Cabang Kudus</option>
		                				<option value="kds2 kas kudus">Kantor Kas Kudus</option>
		                				<option value="kds3 jekulo">Kantor Kas Jekulo</option>
		                				<option>-- Kantor Surakarta --</option>
		                				<option value="skt1 cbg surakarta">Kantor Cabang Surakarta</option>
		                				<option value="skt2 pajang">Kantor Kas Surakarta (Pajang)</option>
		                				<option value="skt3 nusukan">Kantor Kas Surakarta (Nusukan)</option>
		                				<option>-- Kantor Klaten --</option>
		                				<option value="klt1 cbg klaten">Kantor Cabang Klaten</option>
		                				<option>-- Kantor Sragen --</option>
		                				<option value="srg1 cbg sragen">Kantor Cabang Sragen</option>
		                				<option>-- Kantor Tegal --</option>
		                				<option value="tgl1 cbg tegal">Kantor Cabang Tegal</option>
											</select>
										</div>
								<div class="form-group">
									<label class="title">Jumlah Barang</label>
									<input type="text" name="jml_brg" class="form-control"></input>
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