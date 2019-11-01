<?php
include 'koneksi.php';
$nm_brg_pgj			= $_POST['nm_brg_pgj'];
$nm_kantor_pgj		= $_POST['nm_kantor_pgj'];
$jml_brg_pgj		= $_POST['jml_brg_pgj'];
$sat_brg_pgj	 	= $_POST['sat_brg_pgj'];
$hrg_brg_pgj		= $_POST['hrg_brg_pgj'];
$tot_hrg_pgj		= $jml_brg_pgj*$hrg_brg_pgj;
$sat_brg_pgj		= $_POST['status_brg_pgj'];



$input		= mysqli_query($connect, "INSERT INTO barang (nm_brg_pgj, nm_kantor_pgj, jml_brg_pgj, sat_brg_pgj, hrg_brg_pgj, tot_hrg_pgj, status_brg_pgj) VALUES ('$nm_brg_pgj', '$nm_kantor_pgj', 
	'$jml_brg_pgj' , '$sat_brg_pgj' , '$hrg_brg_pgj','$tot_hrg_pgj', '$status_brg_pgj')");

if($input){
	echo "<script>alert('Data Berhasil Ditambah');document.location.href='index_pengajuan.php'</script>";
		
}else{
	echo "<script>alert('Data Gagal Ditambah');document.location.href='pengajuan.php'</script>";
		
}
?>