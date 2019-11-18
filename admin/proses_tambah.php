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



$input = mysqli_query($connect, "INSERT INTO barang (kode_brg, nm_brg, nm_kantor, jml_brg, sat_brg, hrg_brg, tot_hrg, status_brg ) VALUES ('$kode_brg', '$nm_brg', '$nm_kantor', '$jml_brg' , '$sat_brg' , '$hrg_brg', '$tot_hrg', '$status_brg')");

if($input){
	echo "<script>alert('Data Berhasil Ditambah');document.location.href='index_data.php'</script>";
		
	}else{
		echo "<script>alert('Data Gagal Ditambah');document.location.href='tambah.php'</script>";
		
}
?>