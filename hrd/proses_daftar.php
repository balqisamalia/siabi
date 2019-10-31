<?php
include 'koneksi.php';
$nip			= $_POST['nip'];
$nm_ad			= $_POST['nm_ad'];
$username		= $_POST['username'];
$password		= $_POST['password'];
$level			= $_POST['level'];


$input		= mysqli_query($connect, "INSERT INTO LOGIN (nip, nm_ad, username, password, level) VALUES ('$nip','$nm_ad', '$username', '$password', '$level')");

if($input){
	echo "<script>alert('Data Berhasil Ditambah');document.location.href='daftar_admin.php'</script>";
		
}else{
	echo "<script>alert('Data Gagal Ditambah');document.location.href='tambah_admin.php'</script>";
		
}
?>