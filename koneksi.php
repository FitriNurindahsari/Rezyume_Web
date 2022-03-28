<?php
$koneksi = mysqli_connect("localhost", "root", "", "rezyume_web");
if (!$koneksi) {
	echo "koneksi gagal = " . mysqli_connect_error();
}
?>