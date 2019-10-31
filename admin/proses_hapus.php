<?php

include 'koneksi.php';

$id_brg		= $_GET['id_brg'];

$hapus		= mysqli_query($connect, "DELETE FROM barang WHERE id_brg = '$id_brg'");

if($hapus){
	echo "<script>alert('Data Berhasil Dihapus');document.location.href='index_data.php'</script>";
		
}else{
	echo "<script>alert('Data Gagal Dihapus');document.location.href='index_data.php''</script>";
		
}

?>