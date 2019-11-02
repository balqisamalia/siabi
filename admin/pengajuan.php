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
              <a class="navbar-brand" href="www.bprwm.co.id">BPR WM</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li ><a href="index_data.php">Data Barang <span class="sr-only">(current)</span></a></li>
                <li class="active"><a href="index_pengajuan.php">Data Pengajuan</a></li>
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
							<span class="title"><b>Pengajuan Barang</b></span>
						</div>
						<div class="panel-body">
							<form action="proses_pengajuan.php" method="POST" class="form">
								<div class="form-group">
									<label class="title">Nama Barang</label>
									<input type="text" name="nm_brg_pgj" class="form-control" placeholder="Nama Barang" required>
								</div>
								<div class="form-group">
									<label class="title">Kantor</label>
									<select data-placeholder="Nama Kantor.." name="nm_kantor_pgj" class="form-control" required>
										<option>-- Kantor Semarang --</option>
                						<option value="Kantor Pusat Semarang">Kantor Pusat Semarang</option>
            							<option value="Kantor Kas Siliwangi">Kantor Kas Siliwangi</option>
            							<option value="Kantor Kas Banyumanik">Kantor Kas Banyumanik</option>
            							<option value="Kantor Kas Gang Besen">Kantor Kas Gang Besen</option>
            							<option value="Kantor Kas Kelud">Kantor Kas Kelud</option>
            							<option value="Kantor Kas Ngaliyan">Kantor Kas Ngaliyan</option>               <option value="Kantor Kas Ketileng">Kantor Kas Ketileng</option>
            							<option value="Kantor Kas Walter Mangonsidi">Kantor Kas Walter Mangonsidi</option>
            							<option value="Kantor Kas Tlogosari">Kantor Kas Tlogosari</option>
		                				<option>-- Kantor Kendal --</option>
		                				<option value="Kantor Cabang Kendal">Kantor Cabang Kendal</option>
		                				<option value="Kantor Kas Cepiring">Kantor Kas Cepiring</option>
		                				<option value="Kantor Kas Pangadon">Kantor Kas Pengadon</option>
		                				<option value="Kantor Kas Kaliwungu">Kantor Kas Kaliwungu</option>
		                				<option>-- Kantor Weleri --</option>
		                				<option value="Kantor Cabang Weleri">Kantor Cabang Weleri</option>
		                				<option>-- Kantor Kudus --</option>
		                				<option value="Kantor cabang Kudus">Kantor Cabang Kudus</option>
		                				<option value="Kantor kas Kudus">Kantor Kas Kudus</option>
		                				<option value="Kantor Kas Jekulo">Kantor Kas Jekulo</option>
		                				<option>-- Kantor Surakarta --</option>
		                				<option value="Kantor cabang Surakarta">Kantor Cabang Surakarta</option>
		                				<option value="Kantor Kas Pajang">Kantor Kas Surakarta (Pajang)</option>
		                				<option value="Kantor Kas Nusukan">Kantor Kas Surakarta (Nusukan)</option>
		                				<option>-- Kantor Klaten --</option>
		                				<option value="Kantor Cabang klaten">Kantor Cabang Klaten</option>
		                				<option>-- Kantor Sragen --</option>
		                				<option value="Kantor Cabang Sragen">Kantor Cabang Sragen</option>
		                				<option>-- Kantor Tegal --</option>
		                				<option value="Kantor Cabang Tegal">Kantor Cabang Tegal</option>
											</select>
										</div>
								<div class="form-group">
									<label class="title">Jumlah Barang</label>
									<input type="number" name="jml_brg_pgj" class="form-control" required></input>
								</div>
								<div class="form-group">
									<label>Satuan </label>
									<div class="radio">
										<label>
											<input type="radio" name="sat_brg_pgj" value="pcs" checked >Pcs
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="sat_brg_pgj" value="pack">Pack
										</label>
                                     </div>
									<div class="radio">
										<label>
											<input type="radio" name="sat_brg_pgj" value="unit">Unit
										</label>
                                     </div>
                                     </div>
								<div class="form-group">
									<label class="title">Harga Barang</label>
									<input type="number" name="hrg_brg_pgj" class="form-control" placeholder="50000" required>
								</div> 
								<div class="form-group">
									<label class="title">Keterangan</label>
									<input type="text" name="ket_pgj" class="form-control" placeholder="isi disini.." required>
								</div> 
									<div class="form-group">
								<div class="modal-footer">
									<a href="#" class="btn btn-warning" onclick="history.back(-1)"><i class="glyphicon glyphicon-arrow-left"></i> Kembali</a>
									<button type="submit" name="input" value="input" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-right"></i> Submit</button>

									<a href="proses_pengajuan.php" type="submit" name="input" value="input" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-right"></i> Submit</a>
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