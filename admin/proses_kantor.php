<?php

include 'koneksi.php';

$kota = $_GET['kota'];
$result = mysqli_query($connect, "SELECT * FROM nama_kantor where kota = '$kota'");
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
	$rows[] = $r;
}
print json_encode($rows);

?>