<?php 
	// memanggil file function.php / require / include
	require 'functions.php';
	$mahasiswa = query("SELECT * FROM mahasiswa");

	// tombol cari diklik
	if( isset($_POST["cari"]) ) {
		$mahasiswa = cari($_POST["keyword"]);
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Halaman Admin</title>
</head>
<body>
	
	<h1>Daftar Mahasiswa</h1>

	<a href="tambah.php">Tambah data mahasiswa</a>
	<br><br>

	<form action="" method="POST">
		<input type="text" name="keyword" size="50" placeholder="Masukkan keyword pencarian..." autofocus="" autocomplete="off">
		<button type="submit" name="cari">Cari!</button>
	</form>
	<br>

	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>NPM</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>

		<?php $i = 1; ?>
		<?php foreach( $mahasiswa as $row ) : ?>
			
			<tr>
				<td><?= $i; ?></td>
				<td>
					<a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> | <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Hapus Data ini ?');">Hapus</a>
				</td>
				<td><img src="img/<?= $row["gambar"]; ?>" width="50" alt=""></td>
				<td><?= $row['npm']; ?></td>
				<td><?= $row['nama']; ?></td>
				<td><?= $row['email']; ?></td>
				<td><?= $row['jurusan']; ?></td>
			</tr>

			<?php $i++; ?>
		<?php endforeach; ?>

	</table>

</body>
</html>