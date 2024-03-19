<!DOCTYPE html>
<html>

<head>	
	<title>New Pelanggan</title>
</head>

<body>
	<?php include "menu.php"; ?>

	<?
	if ($_SESSION["level"] != "admin" && $_SESSION["level"] != "logistik") {
		echo "Anda tidak bisa mengakses halaman ini";
		exit;
	}
	?>

	<div>
		<form action="create-pelanggan.php" method="POST">
			<h1>Tambah Pelanggan</h1>
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
				</tr>
			</table>
		</form>
	</div>
</body>

</html>