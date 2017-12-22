<?php 
	// memanggil file function.php / require / include
	require 'functions.php';

	// ambil data di url
	$id = $_GET['id'];

	// query data mahasiswa yang bersangkutan
	$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

	// cek apakah tombol submit sudah ditekan atau belum
	if( isset($_POST["submit"] ) ) {

		// cek apakah data berhasil ditambahkan / tidak
		if( ubah($_POST) > 0 ) {
			echo "
				<script>
					alert('data berhasil diubah');
					document.location.href ='index.php';
				</script>
			";

		} else {
			echo "
				<script>
					alert('data gagal diubah');
				</script>
			";
		}
		
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ubah Data Mahasiswa</title>
</head>
<body>
	<h1>Ubah Data Mahasiswa</h1>

	<form action="" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $mhs['id']; ?>">
		<input type="hidden" name="gambarLama" value="<?= $mhs['gambar']; ?>">
		<ul>
			<li>
				<label for="npm">NPM : </label>
				<input type="text" name="npm" id="npm" value="<?= $mhs["npm"]; ?>">
			</li>

			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?>">
			</li>

			<li>
				<label for="email">Email : </label>
				<input type="text" name="email" id="email" value="<?= $mhs["email"]; ?>">
			</li>

			<li>
				<label for="jurusan">Jurusan : </label>
				<input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]; ?>">
			</li>

			<li>
				<label for="gambar">Gambar : </label><br>
				<img src="img/<?= $mhs['gambar']; ?>" alt="" width="40"><br>
				<input type="file" name="gambar" id="gambar">
			</li>

			<li>
				<button type="submit" name="submit" id="submit">Ubah Data</button>
			</li>
		</ul>
	</form>

</body>
</html>