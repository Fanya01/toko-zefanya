<!DOCTYPE html>
<html>

<head>
	<title>Read Pembelian</title>
</head>

<body>
	<?php include "mennu.php"; ?>

	<?php

	require "koneksi.php";

	$id = $_GET["id"];

	$sql = "SELECT pembelian.id, barang.nama as nama_barang, penjualan.jumlah, penjualan.total_harga user.username, penjualan.create_at FROM barang JOIN penjualan on barang.id = penjualan.id_barang JOIN user ON user.id = penjualan.id_staff ORDER BY penjualan.created_at DESC";
	$query = mysqli_query($koneksi, $sql);
	$pembelian = mysqli_fetch_array($query);
	?>
	<div>
		<h1>Lihat Pembelian</h1>
		<table>
			<tr>
				<td>Nama Barang</td>
				<td><input readonly type="text" value="<?= $pembelian["nama_barang"] ?>"> </td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td><input readonly type="text" value="<?= $pembelian["jumlah"] ?>"> </td>
			</tr>
			<tr>
				<td>Total harga</td>
				<td><input readonly type="text" value="<?= $pembelian["total_harga"] ?>"> </td>
			</tr>
			<tr>
				<td>Diinput oleh</td>
				<td><input readonly type="text" value="<?= $pembelian["username"] ?>"> </td>
			</tr>
			<tr>
				<td>Waktu</td>
				<td><input readonly type="text" value="<?= $pembelian["create_at"] ?>"> </td>
			</tr>
		</table>
	</div>
</body>

</html>