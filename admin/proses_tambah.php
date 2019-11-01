<?php
include 'koneksi.php';
$kode_brg	= $_POST['kode_brg'];
$nm_brg		= $_POST['nm_brg'];
$nm_kantor	= $_POST['nm_kantor'];
$jml_brg	= $_POST['jml_brg'];
$sat_brg 	= $_POST['sat_brg'];
$hrg_brg	= $_POST['hrg_brg'];
$tot_hrg	= $jml_brg*$hrg_brg;
$status_brg	= $_POST['status_brg'];



$input		= mysqli_query($connect, "INSERT INTO barang (nm_brg_pgj, nm_kantor_pgj, jml_brg_pgj, sat_brg_pgj, hrg_brg_pgj, tot_hrg_pgj, sat_brg_pgj ) VALUES ('$nm_brg'_pgj, '$nm_kantor_pgj', 
	'$jml_brg_pgj' , '$sat_brg_pgj' , '$hrg_brg_pgj',$tot_hrg_pgj, '$sat_brg_pgj')");

if($input){
	echo "<script>alert('Data Berhasil Ditambah');document.location.href='index_data.php'</script>";
		
}else{
	echo "<script>alert('Data Gagal Ditambah');document.location.href='tambah.php'</script>";
		
}
?>