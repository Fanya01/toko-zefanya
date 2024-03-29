<!DOCTYPE html>
<html>

<head>
	<title>Pelanggan</title>
</head>

<body>
	<?php include "menu.php"; ?>

	<?php
	require "koneksi.php";

$sql = "SELECT * FROM pelanggan";
$query = mysqli_query($koneksi, $sql);
?>

<div>
	<h1>Data pelanggan</h1>
	<form action="new-pelanggan.php" method="GET">
		<button type="submit">Tambah</button>
	</form>
	<table border="1">
		<tr>
			<th>No.</th>
			<th>Nama Pelanggan</th>
			<th>Alamat</th>
			<th>Nomor Telepon</th>
			<th colspan="2">Aksi</th>
		</tr>

		<?php $i = 1; ?>
		<?php while ($pelanggan = mysqli_fetch_array($query)) : ?>
			<tr>
				<td><?= $i ?></td>
				<td><?= $pelanggan["NamaPelanggan"] ?></td>
				<td><?= $pelanggan["Alamat"] ?></td>
				<td><?= $pelanggan["NomorTelepon"] ?></td>
				<td>
					<form action="read-pelanggan.php" method="GET">
						<input type="hidden" name="id" value='<?= $pelanggan["id"] ?>'>
						<button type="submit">Lihat</button>
					</form>
				</td>
				<td>
					<form action="delete-pelanggan.php" method="POST" onsubmit="return konfirmasi(this)">
						<input type="hidden" name="id" value='<?= $pelanggan["id"] ?>'>
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
		formData = new FormData(form);
		id = formData.get("id");
		return confirm('Hapus pelanggan ' + id + '?'); // Menambahkan tanda kutip untuk variabel $id
	}
</script>

</body>

</html>