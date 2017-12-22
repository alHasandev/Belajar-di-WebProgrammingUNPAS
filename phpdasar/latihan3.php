<?php 

	$mahasiswa = [
		["Mohamad Albie", "0427", "Teknik Informatika", "mohamad9albie@gmail.com"],
		["Muhammad Amien Hidayat", "0165", "Teknik Informatika", "amienb7@gmail.com"],
		["Muhammad Hamrullah", "0255", "Teknik Informatika", "hamrullah21@gmail.com"],
		["Muhammad Azhari", "0111", "Teknik Informatika", "ariboy@gmail.com"]
	];

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Daftar Mahasiswa</title>
 </head>
 <body>
 	<h1>Daftar Mahasiswa</h1>
	
	<?php foreach( $mahasiswa as $mhs ) : ?>
 	<ul>
 		<li>Nama : <?php echo $mhs[0]; ?></li>
 		<li>NPM : <?php echo $mhs[1]; ?></li>
 		<li>Jurusan : <?php echo $mhs[2]; ?></li>
 		<li>Email : <?php echo $mhs[3]; ?></li>
 	</ul>
 	<?php endforeach; ?>
 </body>
 </html>