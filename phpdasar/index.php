<?php 
// Pertemuan 3 -- PHP Dasar
// Control Flow
// Perulangan
	// for
	// for ( $i = 0; $i < 5; $i++ ) {
	// 	echo "Hello World! <br>";
	// }

	// while
	// $i = 0;
	// while( $i < 5 ) {
	// 	echo "Hello World! <br>";
	// 	$i++;
	// }

	// do.. while
	// $i = 5;
	// do {
	// 	echo "Hello World! <br>";
	// 	$i++;

	// } while( $i < 5 );

	// foreach : perulangan khusus array;


// Pengkondisian
	// If else
	// If.. else if.. else
	// ternary
	// switch

// $x = 20;
// if( $x < 20 ) {
// 	echo "Benar";
// } else if( $x == 20 ) {
// 	echo "Binggo";
// } else {
// 	echo "Salah";
// }


 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Latihan 1</title>
 	<style>
 		.warna-baris {
 			background-color: silver;
 		}
 	</style>
 </head>
 <body>

 	<table border="1" cellpadding="10" cellspacing="0">
	 	<!-- <?php 
	 		// for( $i = 1; $i <= 3; $i++ ) {
	 		// 	echo "<tr>";
	 		// 	for( $j = 1; $j <= 5; $j++ ) {
	 		// 		echo "<td>$i,$j</td>";
	 		// 	}
	 		// 	echo "</tr>";
	 		// }
	 	 ?> -->

	 	 <?php for( $i = 1; $i <= 5; $i++ ) : ?>
	 	 	<?php if( $i % 2 == 1 ) : ?>
				<tr class="warna-baris">
			<?php else : ?>
				<tr>
			<?php endif; ?>
				<?php for( $j = 1; $j <=5; $j++ ) : ?>
					<td><?= "$i,$j"; ?></td>
				<?php endfor; ?>
				</tr>
	 	 <?php endfor; ?>

 	</table>
 	
 </body>
 </html>