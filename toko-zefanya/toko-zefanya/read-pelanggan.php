<!DOCTYPE html>
<html>

<head>
	<title>Read Pelanggan</title>
</head>
<body>
	<?php include "menu.php"; ?>

	<?php

	require "koneksi.php";

	$id = $_GET["id"];

	$sql = "SELECT * FROM Pelanggan WHERE id = '$id'";
	$query = mysqli_query($koneksi, $sql);

	$pelanggan = mysqli_fetch_array($query);
	?>

	<div>
		<form action="update-pelanggan.php" method="POST">
			<h1>Lihat Pelanggan</h1>

			<input type="hidden" name="id" value="<?= $id ?>">
			<table>
            <tr>
					<td>Nama Pelanggan</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>
					<td><input type="text" name="alamat"></td>		
					</td>
				</tr>
				<tr>
					<td>Nomor Telepon</td>
					<td><input type="number" min="0" name="nomortelepon"></td>
				</tr>
				<tr>
					<td colspan="2">
						<button type="submit">SIMPAN</button>
						<button type="reset">RESET</button>
					</td>
			</table>
		</form>
	</div>
</body>

</html>