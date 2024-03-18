<?php

require "koneksi.php";

$id = $_POST["id"];
$namapelanggan = $_POST["namapelanggan"];
$alamat = $_POST["alamat"];
$nomortelepon = $_POST["nomortelepon"];

$sql = "UPDATE pelanggan SET nama = '$namapelanggan', alamat = '$alamat', nomortelepon = '$nomortelepon' ";
mysqli_query($koneksi, $sql);

if (mysqli_error($koneksi)) {
	echo mysqli_error($koneksi);
} else {
	header("location: pelanggan.php");
}