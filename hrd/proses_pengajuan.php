<?php
include 'koneksi.php';


$id 		= $_GET['id_pengajuan'];
$action		= $_GET['action'];

$input = mysqli_query($connect, "UPDATE pengajuan_brg SET notif_pgj='$action' WHERE id_pengajuan=$id");
if($action){
	echo "<script>alert('Pengajuan Di Terima');document.location.href='index_pengajuan_hrd.php'</script>";
		
}else{
	echo "<script>alert('pengajuan Ditolak');document.location.href='index.php'</script>";
		
}

?>