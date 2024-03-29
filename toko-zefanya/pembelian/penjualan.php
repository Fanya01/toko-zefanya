<!DOCTYPE html>
<html>

<head>
	<title>Penjualan</title>
</head>

<body>
	<?php include "menu.php"; ?>

	<?php

	require "koneksi.php";

	$sql = "SELECT penjualan.id, barang.nama as nama_barang, penjualan.jumlah, penjualan.total_harga user.username, penjualan.create_at FROM barang JOIN penjualan on barang.id = penjualan.id_barang JOIN user ON user.id = penjualan.id_staff ORDER BY penjualan.created_at DESC";
	$query = mysqli_query($koneksi, $sql);
	?>

	<div>
		<h1>Data Penjualan</h1>
		<form action="new-penjualan.php" method="POST">
			<button type="submit">Tambah</button>
		</form>
		<table>
			<tr>
				<th>No.</th>
				<th>Nama Barang</th>
				<th>Jumlah</th>
				<th>Total Harga</th>
				<th>Diinput oleh</th>
				<th>Waktu</th>
				<th colspan="2">Aksi</th>
			</tr>
			<tr>
				<td><?= $i; ?></td>
				<td><?= $penjualan["nama_barang"] ?></td>
				<td><?= $penjualan["jumlah"] ?></td>
				<td><?= $penjualan["total_harga"] ?></td>
				<td><?= $penjualan["username"] ?></td><td><?= $penjualan["create_at"] ?></td>
				<td>
					<form action="read-penjualan.php" method="GET">
						<input type="hiden" name="id" value='<?= $penjualan["id"] ?>'>
						<button type="submit">Lihat</button>
					</form>
				</td>
				<td>
					<form action="delete-penjualan.php" method="POST" onsubmit="return konfirmasi(this)">
						<input type="hiden" name="id" value='<?= $penjualan["id"] ?>'>
						<button type="submit">Delete</button>
					</form>
				</td>
			</tr>
			<?php $i++; ?>
		<?php endwhile ?>
		</table>
	</div>
	<script>
		function konfirmasi(form) {
			formData = new FormData(form)
			id = formData.get("id");
			return confirm('Hapus penjualan '${id}'?');
		}
	</script>
</body>

</html>