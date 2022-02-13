<?php

// array
// variabel yang dapat memiliki banyak nilai
// nilai dalam array disebut elemen

// cara lama
$hari = array("senin", "selasa", "rabu", "kamis", "jumat", "sabtu", "ahad");
var_dump ($hari);

echo "<br>";

print_r ($hari);

echo "<br>";

//cara baru
$hari2 = ["senin", "selasa", "rabu", "kamis", "jumat", "sabtu", "ahad"];
var_dump ($hari2);

echo "<br>";

print_r ($hari2);

echo "<br>";

// menampilkan 1 elemen pada array
$data1= [12345, "tulisan", true];
echo $data1[0];
echo "<br>";
echo $data1[1];
echo "<br>";
echo $data1[2];
echo "<br>";

// menambahkan elemen baru pada array
var_dump($data1);
$data1[]=false;
$data1[]="tulis";
echo "<br>";
var_dump($data1);

echo "<br>";


?>