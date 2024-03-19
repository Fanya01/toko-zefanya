<!DOCTYPE html>
<html>

<head>
	<title>Read Barang</title>
</head>
<body>
	<?php include "menu.php"; ?>

	<?php

	require "koneksi.php";

	$id = $_GET["id"];

	$sql = "SELECT * FROM barang WHERE id = '$id'";
	$query = mysqli_query($koneksi, $sql);

	$barang = mysqli_fetch_array($query);
	?>

	<div>
		<form action="update-barang.php" method="POST">
			<h1>Lihat Barang</h1>

			<input type="hidden" name="id" value="<?= $id ?>">
			<table>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>Kategori</td>
					<td>
						<select name="kategori">
							<option value="makanan">makanan</option>
							<option value="minuman">minuman</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Stok</td>
					<td><input type="number" min="0" name="stok"></td>
				</tr>
				<tr>
					<td>Harga Beli</td>
					<td><input type="number" min="0" name="harga-beli"></td>
				</tr>
				<tr>
					<td>Harga Jual</td>
					<td><input type="number" min="0"
						name="harga_jual"></td>
				</tr>
				<tr>
					<td colspan="2">
						<button type="submit">SIMPAN</button>
						<button type="reset">RESET</button>
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>

</html>