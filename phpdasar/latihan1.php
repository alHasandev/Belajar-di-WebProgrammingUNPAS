<?php 

$mahasiswa = [
	[
		"nama" => "Mohamad Albie", 
		"npm" => "0427",
		"jurusan" => "Teknik Informatika",
		"email" => "mohamad9albie@gmail.com",
		"gambar" => "profil1.jpg"
	],
	[
		"npm" => "0165",
		"nama" => "Muhammad Amien Hidayat", 
		"jurusan" => "Teknik Informatika",
		"email" => "amienb7@gmail.com",
		"gambar" => "profil2.png"
	]

];

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>GET</title>
 </head>
 <body>
 	<h1>Daftar Mahasiswa</h1>
 	<ul>
 	<?php foreach( $mahasiswa as $mhs) : ?>
		<li><a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&npm=<?= $mhs["npm"];?>&jurusan=<?= $mhs["jurusan"];?>&email=<?= $mhs["email"];?>&gambar=<?= $mhs["gambar"];?>"><?= $mhs["nama"] ?></a></li>
 	<?php endforeach; ?>
 	</ul>

 </body>
 </html>