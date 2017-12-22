<?php 
// // Associative Array
// // cara lama
// $hari = array("senin", "selasa", "rabu");

// // cara baru
// $bulan = ["januari", "pebruari", "maret"];

// // Menampilkan Array
// var_dump($bulan);
// echo "<br>";

// print_r($bulan);
// echo "<br>";

// echo $hari[2];
// echo "<br>";

// for( $i = 0; $i < 3; $i++ ) {
// 	echo $bulan[$i];
// 	echo "<br>";
// }

// foreach( $bulan as $b ) {
// 	echo $b;
// 	echo "<br>";
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<style>
		.kotak {
			width: 50px;
			height: 50px;
			background-color: lime;
			box-shadow: 0px 4px 10px -2px rgba(0,0,0,0.5); 
			text-align: center;
			float: left;
			margin: 3px;
			line-height: 50px;
			transition: .5s;
		}
		.kotak:hover {
			transform: rotate(360deg);
			border-radius: 50%;
		}

		.clear {
			clear: both;
		}
	</style>
	<title>latihan Array</title>
</head>
<body>
	<?php 
		$angka = [
			[1,2,3],
			[4,5,6],
			[7,8,9]
		];	
	 ?>

	<?php foreach( $angka as $a ) : ?>
		<?php foreach( $a as $b ) : ?>
			<div class="kotak"><?= $b; ?></div>
		<?php endforeach; ?>

		<div class="clear"></div>
	<?php endforeach; ?>

</body>
</html>
