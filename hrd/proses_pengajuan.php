<?php
include 'koneksi.php';


$id 		= $_GET['id_pengajuan'];
$action		= $_GET['action']; //isi action adalah url


//isi action == Terima adalah Terima
if($action == 'Terima') 
{
	$input = mysqli_query($connect, "UPDATE pengajuan_brg SET notif_pgj='$action' WHERE id_pengajuan=$id");
	header("location: index_pengajuan_hrd.php");

}elseif($action == 'Tolak') {
	$input = mysqli_query($connect, "UPDATE pengajuan_brg SET notif_pgj='$action' WHERE id_pengajuan=$id");
	//$input = mysqli_query($connect, "DELETE FROM pengajuan_brg WHERE id_pengajuan='$id'"); --> hapus pengajuan
	header("location: index_pengajuan_hrd.php");

	
}?>