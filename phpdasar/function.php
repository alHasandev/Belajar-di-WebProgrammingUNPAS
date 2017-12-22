<?php 
// definisi function
function salam($waktu = "Datang", $nama = "Admin") {

	return "Selamat $waktu, $nama!";
}

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Latihan Function</title>
 </head>
 <body>
 	<!-- Pemanggilan Function -->
 	<h1><?= salam("Pagi"); ?></h1>
 </body>
 </html>