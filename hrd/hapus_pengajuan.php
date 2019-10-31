<?php

include 'koneksi.php';

$id_pengajuan	= $_GET['id_pengajuan'];

$hapus		= mysqli_query($connect, "DELETE FROM pengajuan_brg WHERE id_pengajuan = '$id_pengajuan'");

if($hapus){
	echo "<script>alert('Data Ditolak');document.location.href='../admin/index_pengajuan.php'</script>";
		
}else{
	echo "<script>alert('Data Gagal Ditolak');document.location.href='index.php''</script>";
		
}

?>