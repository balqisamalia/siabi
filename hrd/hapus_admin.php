<?php

include 'koneksi.php';

$id_login		= $_GET['id_login'];

$hapus		= mysqli_query($connect, "DELETE FROM login WHERE id_login = '$id_login'");

if($hapus){
	echo "<script>alert('Data Berhasil Dihapus');document.location.href='daftar_admin.php'</script>";
		
}else{
	echo "<script>alert('Data Gagal Dihapus');document.location.href='daftar_admin.php''</script>";
		
}

?>