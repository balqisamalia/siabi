<?php
include 'koneksi.php';
$nm_brg_pgj			= $_POST['nm_brg_pgj'];
$nm_kantor_pgj		= $_POST['nm_kantor_pgj'];
$jml_brg_pgj		= $_POST['jml_brg_pgj'];
$sat_brg_pgj	 	= $_POST['sat_brg_pgj'];
$hrg_brg_pgj		= $_POST['hrg_brg_pgj'];
$tot_hrg_pgj		= $jml_brg_pgj*$hrg_brg_pgj;
$ket_pgj			= $_POST['$ket_pgj'];



$input		= mysqli_query($connect, "INSERT INTO pengajuan_brg (nm_brg_pgj, nm_kantor_pgj, jml_brg_pgj, sat_brg_pgj, hrg_brg_pgj, tot_hrg_pgj, ket_pgj) VALUES ('$nm_brg_pgj', '$nm_kantor_pgj', 
	'$jml_brg_pgj' , '$sat_brg_pgj' , '$hrg_brg_pgj','$tot_hrg_pgj', '$ket_pgj')");

if($input){
	echo "<script>alert('Data Diajukan');document.location.href='index_pengajuan.php'</script>";
		
}else{
	echo "<script>alert('Data Gagal Diajukan');document.location.href='pengajuan.php'</script>";
		
}
?>