<?php 
// array
// sebuah variabel yang dapat memiliki banyak nilai
// elemen pada array di PHP boleh memiliki tipe data yang berbeda

// Membuat Array
// cara lama
$hari = array("Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu","Minggu");

// Cara Baru
// $hari = ["Senin","Selasa","Rabu","kamis","Jum'at","Sabtu","Minggu"];
$bulan = ["Januari","Pebruari","Maret","April"];
$arr1 = [123, "tulisan", false];


// Menampilkan Array

// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// Menampilkan 1 elemen array

// echo $arr1[0];

// Menambahkan elemen baru pada array
print_r($bulan);
$bulan[] = "Mei";
$bulan[] = "Juni";
echo "<br>";
print_r($bulan);
 ?>
