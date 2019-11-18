<?php
		if(!isset($_GET["id_brg"]))
		{
				
			 header("location:index_data.php");
		}
		else {
				
				include ('koneksi.php');
				$id_brg = $_GET['id_brg'];
				
				
				$sql ="Select * from barang where id_brg = '$id_brg'";
				$re = mysqli_query($connect,$sql);
				while($data=mysqli_fetch_array($re))
				{
					$kode_brg		= $data['kode_brg'];
					$tgl_msk		= $data['tgl_msk'];
					$nm_brg 		= $data['nm_brg'];
					$nm_kantor 		= $data['nm_kantor'];
					$hrg_brg		= $data['hrg_brg'];
					$jml_brg 		= $data['jml_brg'];
					$sat_brg		= $data['sat_brg'];
					$tot_hrg 		= $data['tot_hrg'];
					$status_brg		= $data['status_brg'];
				
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
							<span class="title"><b>Detail Barang</b></span>
						</div>
						<div class="panel-body">
							<table class="table table-stripped" width="100%">
									
									<tr>
                                            <th>Kode Barang</th>
                                            <td><?php echo $kode_brg; ?> </td>
                                    </tr>

									<tr>
                                            <th>Nama Barang</th>
                                            <td><?php echo $nm_brg; ?> </td>
                                    </tr>

                                    <tr>
                                    		<th>Tanggal Masuk</th>
                                            <td><?php echo $tgl_msk; ?> </td>
                                    </tr>
                                    <tr>
                                    		<th>Kantor</th>
                                            <td><?php echo $nm_kantor; ?> </td>
                                    </tr>

                                    <tr>
                                    		<th>Harga </th>
                                            <td><?php echo $hrg_brg; ?> </td>
                                    </tr>

                                    <tr>
                                    		<th>Jumlah</th>
                                            <td><?php echo $jml_brg; ?> / <?php echo $sat_brg; ?> </td>
                                    </tr>

                                    <tr>
                                    		<th>Total</th>
                                            <td><?php echo $tot_hrg; ?> </td>
                                    </tr>
                                    <tr>
                                    		<th>Status</th>
                                            <td><?php echo $status_brg; ?> </td>
                                    </tr>
                                    <th>
                                    	<a href="#" class="btn btn-warning" onclick="history.back(-1)"><i class="glyphicon glyphicon-arrow-left"></i> Kembali</a>
                                    </th>
								</table>
								</div>
								</div>
								</div>
								</div>

</body>
</html>