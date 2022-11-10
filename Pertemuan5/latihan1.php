<?php 
// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
//$hari = "Senin"; 
// $hari2 = "Selasa";


// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");

// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];


// menampilkan array
// echo tidak bisa mencetak array
// yang digunakan var_dump() atau print_r()
var_dump($bulan);
echo "<br>";
print_r($bulan);
echo "<br>";


// menampilkan 1 elemen pada array
echo $arr1[0];
echo "<br>";
echo $bulan[1];


// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
var_dump($hari);


?>