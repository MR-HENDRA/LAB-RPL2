<?php

$a=10; 
$b= ++$a; // Pre increment

var_dump($a); // 11 
var_dump($b); // 11 

// pertama, nilai $a akan bertambah 1, dari 10 menjadi 11, lalu nilai $a akan dikembalikan ke nilai $b, jadi $b akan bernilai 11

echo"<br>";

$a=10; 
$b=$a++; // Post increment

var_dump($a); // 11
var_dump($b); // 10

// pertama, nilai $b sama dengan nilai $a awal, yakni 10, lalu nilai $a bertambah 1 menjadi 11 

echo"<br>";

$a=10; 
$b= --$a; // Pre Decrement

// pertama, nilai $a akan berkurang 1 menjadi 9, dan nilai $a akan dikembalikkan ke $b, jadi $b juga bernilai 9

var_dump($a); // 9
var_dump($b); // 9

echo "<br>";

$a=10; 
$b= $a--; // Pos Decrement

var_dump($a); // 9
var_dump($b); // 10

// pertama, nilai $b sama dengan nilai awal $a, yakni 10. sementara itu nilai $a akan dikurangi 1 menjadi 9

?>