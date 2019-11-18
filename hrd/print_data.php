

<html>
	<body>
		<table width="100%" >
			<tr>
		<td align="right"><img src="icon.jpg" width="50%"></td>
		<td align="center"><h3>PT BANK PERKREDITAN RAKYAT WELERI MAKMUR</h3><p>
		<h4>KANTOR SEMARANG PUSAT</h4>Jl. Majapahit, Ruko Gayamsari No.17-20 Semarang Telp. (024) 673325</td>
		</tr>
		</table><hr color="black" size="5px"><br><br>
		<center><h2>DATA PENGAJUAN BARANG</h2></center>
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

		  </tbody>
		  </table> 
		  </center><br><br>
		  <table width="100%">
		  	<tr>
		  <td><p align="right">Hormat Kami,<br><br><br><br><br><br> Kasie Umum</td>
		</tr>
		</table>
		  <script>
			window.load = print_d();
			function print_d(){
				window.print();
			}
		  </script>
		
	</body>
</html>



