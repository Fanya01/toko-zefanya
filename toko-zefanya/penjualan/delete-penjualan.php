<?php

require "koneksi.php";

session_start();

if ($_SESSION["level"] != "admin") {
	echo "Anda tidak dapat menghapus halaman ini";
	exit;
}

$id = $_POST["id"];

$sql = "DELETE FROM penjualan WHERE id = '$id'";
mysqli_query($koneksi, $sql);

if (mysqli_error($koneksi)) {
	echo mysqli_error($koneksi);
} else {
	header("location; penjualan.php");
}