<?php
	include('../koneksi/koneksi.php');

	$angka=1;
	
?>


<html>
	<body>
		<center><h2>DATA BARANG</h2></center>
		<center>
			<table border="1" width="100%">
			<tr>
				<td align="center"><b>Kode Barang</b></td>
				<td align="center"><b>Nama Barang</b></td>
				<td align="center"><b>Nama Kantor</b></td>
				<td align="center"><b>Jumlah Barang</b></td>
				<td align="center"><b>Harga Barang</b></td>
				<td align="center"><b>Status Barang</b></td>
			</tr>

			<?php
			  
			  $lihat = mysqli_query($connect, "select * from barang");
			  
					while($row = mysqli_fetch_assoc($lihat)){
						echo "		
							<tr>
								<td>$row[kode_brg]</td>
								<td>$row[nm_brg]</td>
								<td>$row[nm_kantor]</td>
								<td>$row[jml_brg]</td>
								<td>$row[hrg_brg]</td>
								<td>$row[status_brg]</td>
							</tr>
						";
					}
			?>
		  </tbody>
		  </table> 
		  </center>
		  
		  <script>
			window.load = print_d();
			function print_d(){
				window.print();
			}
		  </script>
		
	</body>
</html>



