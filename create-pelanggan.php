<?php

require "koneksi.php";

$namapelanggan = $_POST["namapelanggan"];
$alamat = $_POST["alamat"];
$nomortelepon = $_POST["nomortelepon"];

$sql = "INSERT INTO pelanggan (namapelangggan, alamat, nomortelepon) VALUES ('$namapelanggan', '$alamat', '$nomortelepon')";
mysqli_query($koneksi, $sql);

if (mysqli_error($koneksi)) {
	echo mysqli_error($koneksi);
} else {
	header("locatio: pelanggan.php");
}