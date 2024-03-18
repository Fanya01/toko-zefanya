<?php

require "koneksi.php";

session_start();

if ($_SESSION["level"] != "admin") {
	echo"Anda tidak dapay menghapus data ini";
	exit;
}

$id = $_POST["id"];

$sql = "DELETE FROM pembelian WHERE id = '$id'";
mysql_query($koneksi, $sql);

if (mysql_error($koneksi)) {
	echo mysql_error($koneksi);
} else {
	header("location: pembelian.php");
}