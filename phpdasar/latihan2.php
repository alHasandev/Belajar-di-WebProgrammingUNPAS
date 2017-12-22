<?php 
// Cek apakah tidak ada data do $_GET
if( !isset($_GET["nama"]) || 
	!isset($_GET["npm"]) || 
	!isset($_GET["jurusan"]) ||
	!isset($_GET["email"]) ||
	!isset($_GET["gambar"]) ) {
	// redirect
	header("Location: latihan1.php");
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Detail Mahasiswa</title>
</head>
<body>
	<ul>
		<li><img src="img/<?= $_GET["gambar"]; ?>" alt=""></li>
		<li><?= $_GET["nama"]; ?></li>
		<li><?= $_GET["npm"]; ?></li>
		<li><?= $_GET["email"]; ?></li>
		<li><?= $_GET["jurusan"]; ?></li>
	</ul>

	<a href="latihan1.php">Kembali ke Daftar Mahasiswa</a>
</body>
</html>