<?php

include 'crud/koneksi/koneksi.php';

$kode_brg	= $_POST['kode_brg'];
$tgl_msk	= $_POST['tgl_msk'];
$nm_brg		= $_POST['nm_brg'];
$nm_kantor	= $_POST['nm_kantor'];
$jml_brg	= $_POST['jml_brg'];
$hrg_brg	= $_POST['hrg_brg'];
$status_brg	= $_POST['status_brg'];

$update	= mysqli_query($connect, "UPDATE barang SET kode_brg = '$kode_brg', tgl_msk = '$tgl_msk', nm_brg = '$nm_brg', nm_kantor = '$nm_kantor', jml_brg = '$jml_brg', hrg_brg = '$hrg_brg' , status_brg = '$status_brg' WHERE id_brg = '$id_brg'");

if($update){
	echo "<script>alert('Data Berhasil Diedit');document.location.href='index_data.php'</script>";
		
}else{
	echo "<script>alert('Data Gagal Diedit');document.location.href='edit.php?id_brg='$id_brg''</script>";
		
}
?>