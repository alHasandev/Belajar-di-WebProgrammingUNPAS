<?php 
	// Date
	// Menampilkan Tanggal dengan format tertentu
	// echo date("l, d-M-Y");

	// Time
	// UNIX Timestamp / EPOCH time
	// Detik yang sudah berlalu sejak 1 Januari 1970
	// echo time();
	// echo date("l, d-M-Y", time()+60*60*24*100);

	// mkTime
	// membuat sendiri detik
	// mktime(0,0,0,0,0,0);
	// jam, menit, detik, bulan, tanggal, tahun
	// echo date("l", mktime(0,0,0,4,26,1997));
	
	// strtotime
	echo date("l, d-M-Y", strtotime("26 april 1999"));
 ?>