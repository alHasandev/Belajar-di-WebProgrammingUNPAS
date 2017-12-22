<?php 
	// $mahasiswa = [
	// 	["Mohamad Albie", "0427", "Teknik Informatika", "mohamad9albie@gmail.com"],
	// 	["Muhammad Amien Hidayat", "0165", "Teknik Informatika", "amienb7@gmail.com"],
	// 	["Muhammad Azhari", "0111", "Teknik Informatika", "ariboy@gmail.com"]
	// ];

// Array Associative
// Deifinisinya sama seperti array numerik, kecuali
// keynya adalah string yang kita buat sendiri
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
 	<title>Latihan Array 2</title>
 </head>
 <body>
 	<h1>Daftar Mahasiswa</h1>
 	<?php foreach( $mahasiswa as $mhs ) : ?>
 	<ul>
 		<li>
 			<img src="img/<?php echo $mhs["gambar"]; ?>" alt="">
 		</li>
 		<li>Nama : <?= $mhs["nama"]; ?></li>
 		<li>NPM : <?= $mhs["npm"]; ?></li>
 		<li>Jurusan : <?= $mhs["jurusan"]; ?></li>
 		<li>Email : <?= $mhs["email"]; ?></li>
 	</ul>
 	<?php endforeach; ?>
 </body>
 </html>