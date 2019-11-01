<?php
		if(!isset($_GET["id_pengajuan"]))
		{
				
			 header("location:index.php");
		}
		else {
				
				include ('koneksi.php');
				$id_pengajuan = $_GET['id_pengajuan'];
				
				
				$sql ="Select * from pengajuan_brg where id_pengajuan = '$id_pengajuan'";
				$re = mysqli_query($connect,$sql);
				while($data=mysqli_fetch_array($re))
				{
					$tgl_pengajuan 		= $data['tgl_pengajuan'];
					$nm_brg_pgj 		= $data['nm_brg_pgj'];
					$nm_kantor_pgj 		= $data['nm_kantor_pgj'];
					$jml_brg_pgj 		= $data['jml_brg_pgj'];
					$sat_brg_pgj 		= $data['sat_brg_pgj'];
					$tot_hrg_pgj 		= $data['tot_hrg_pgj'];
					$ket_pgj 			= $data['ket_pgj'];
				}	
		
	}
			?> 
<html>
<head>
	<title src="assets/css/logo.png">Data Barang Iventaris BPR</title>
	<link rel="icon" type="image/jpg" href="../assets/icon.jpg">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</head>
<body>
<div class="row">
		<div class="container-fuild">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<br>
					<br>
					<div class="panel panel-default">
						<div class="panel-heading">
							<span class="title"><b>Detail Pengajuan</b></span>
						</div>
						<div class="panel-body">
							<table class="table table-stripped" width="100%">
									<tr>
                                            <th>Nama Barang</th>
                                            <td><?php echo $nm_brg_pgj; ?> </td>
                                    </tr>

									<tr>
											<th>Tanggal Pengajuan</th>
                                            <td><?php echo $tgl_pengajuan; ?> </td>
                                    </tr>
                                    <tr>
                                    		<th>Kantor</th>
                                            <td><?php echo $nm_kantor_pgj; ?> </td>
                                    </tr>
                                    <tr>
                                    		<th>Jumlah</th>
                                            <td><?php echo $jml_brg_pgj; ?> / <?php echo $sat_brg_pgj; ?> </td>
                                    </tr>    
                                    <tr>
                                    		<th>Total Harga</th>
                                            <td><b>Rp</b> <?php echo $tot_hrg_pgj; ?> </td>
                                    </tr>
                                     <tr>
                                    		<th>Keterangan</th>
                                            <td><?php echo $ket_pgj; ?> </td>
                                    </tr>
                                    <th>
                                    
                                    <a href="#" class="btn btn-warning" onclick="history.back(-1)"><i class="glyphicon glyphicon-arrow-left"></i> Kembali</a>

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

                                 	<button onClick="print_data()" class="btn btn-info">Print</button>
								
								<script>
									function print_data(){
										window.open("cetak.php","_blank");
									}
								</script>
                                    </th>
								</table>
								</div>
								</div>
								</div>
								</div>

</body>
</html>