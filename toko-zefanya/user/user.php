<!DOCTYPE html>
<html>

<head>
	<title>User</title>
</head>

<body>
	<?php include "menu.php"; ?>

	<?php
	if ($_SESSION["level"] != "admin") {
		echo "Anda tidak dapat mengakses halaman ini";/
		exit;
	}

	require "koneksi.php";
he
	$sql = "SELECT * FROM user";
	$query = mysql_query($konesi, $sql);
	?>

	<div>
		<h1>Data User</h1>
		<form action="new-user.php" method="GET">
			<button type="submit">Tambah</button>
		</form>
		<table border="1">
			<tr>
				<th>No.</th>
				<th>Username</th>
				<th>Level</th>
				<th>Dibuat pada</th>
				<th>Diubah pada</th>
				<th colspan="2">Aksi</th>
			</tr>

			<?php $i = 1; ?>
			<?php while ($user = mysqli_fetch_array($query)) : ?>
				<tr>
					<td><?= $i ?></td>
					<td><?= $user["username"] ?></td>
					<td><?= $user["level"] ?></td>
					<td><?= $user["create_at"] ?></td>
					<td><?= $user["update_at"] ?></td>
					<td>
						<form action="read-user.php" method="GET">
							<input type="hidden" name="id" value='<?= $user["id"] ?>'>
							<button type="submit">Lihat</button>
						</form>
					</td>
					<td>
						<form action="delete-user.php" method="POST" onsubmit="return konfirmasi(this)">
							<input type="hidden" name="id" value='<?= $user["id"] ?>'>
							<button type="submit">Delete</button>
						</form>
					</td>
				</tr>
				<?php $i++; ?>
			<?php endwhile ?>
		</table>
	</div>
	
	<script>
		function konfirmasi(form){
			formdata = new FormData(form);
			id = formData,get("id");
			return confirm('Hapus user '${id}'?');
		}
	</script>
</body>

</html>