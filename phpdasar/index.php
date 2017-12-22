<?php
// Lokasi : http://localhost/Web%20Programming%20Unpas/phpdasar/pertemuan2/
// Pertemuan 2 - PHP Dasar
// Mengenai Sintaks PHP

// Standar Output
	// echo, print
	// print_r
	// var_dump

	// echo 'Mohamad Albie <br>';
	// echo 123;
	// echo '<br>';
	// echo "jum'at <br>";
	// echo 'true <br>';
	// print "Mohamad Albie <br>";
	// print_r('Mohamad Albie <br>');
	// var_dump('Mohamad Albie');
	// echo "<br>";

	// // Penulisan Sintaks PHP
	// // 1. PHP di dalam HTML --Recomended
	// // 2. HTML di dalam PHP

	// // Variabel dan Tipe Data
	// // variabel
	// 	// tidak boleh diawali oleh angka, tapi boleh mengandung angka
	// 	// tanda kutif dua lebih powerfull daripada tanda kutif satu.
	$nama = "Mohamad Albie";

	echo "Halo, nama saya $nama";
	echo "<br>";

	// Operator
	// Aritmatika
	// + - * / %
	// $x = 10;
	// $y = 20;
	// echo "Hasil dari 10 X 20 adalah ".$x * $y;
	// echo "<br>";

	// // Penggabung String / concatenation / concat / .
	// $nama_depan = "Mohamad";
	// $nama_belakang = "Albie";
	// echo $nama_depan ." ". $nama_belakang;

	// Assignment
	// // =, +=, -=, *=, /=, %=, .=
	// $x = 1;
	// $x += 5;
	// echo $x;

	// $nama = "Mohamad";
	// $nama .= " ";
	// $nama .= "Albie";
	// echo $nama;

	// // Perbandingan
	// // < | > | <= | >= | == | !=
	// var_dump(1 == '1');
	// var_dump(1 === '1');

	// // Logika
	// // &&, ||, !
	// $x = 10;
	// var_dump($x < 20 && $x % 2 == 0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Belajar PHP</title>
</head>
<body>
	<h1>Halo, Selamat Datang <?php echo $nama ?></h1>
	<p><?php echo "ini adalah paragraf" ?></p>

	<?php 
		echo "<h1>Halo, Selamat Datang Albie</h1>"
	 ?>
	
</body>
</html>
