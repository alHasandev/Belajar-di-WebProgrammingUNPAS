<?php 
	// memanggil file function.php / require / include
	require 'functions.php';
	// cek apakah tombol submit sudah ditekan atau belum
	if( isset($_POST["submit"] ) ) {

		// cek apakah data berhasil ditambahkan / tidak
		if( tambah($_POST) > 0 ) {
			echo "
				<script>
					alert('data berhasil ditambahkan');
					document.location.href ='index.php';
				</script>
			";

		} else {
			echo "
				<script>
					alert('data gagal ditambahkan');
				</script>
			";
		}
		
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah Data Mahasiswa</title>
</head>
<body>
	<h1>Tambah Data Mahasiswa</h1>

	<form action="" method="POST" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="npm">NPM : </label>
				<input type="text" name="npm" id="npm">
			</li>

			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama">
			</li>

			<li>
				<label for="email">Email : </label>
				<input type="text" name="email" id="email">
			</li>

			<li>
				<label for="jurusan">Jurusan : </label>
				<input type="text" name="jurusan" id="jurusan">
			</li>

			<li>
				<label for="gambar">Gambar : </label>
				<input type="file" name="gambar" id="gambar">
			</li>

			<li>
				<button type="submit" name="submit" id="submit">Tambah Data</button>
			</li>
		</ul>
	</form>

</body>
</html>