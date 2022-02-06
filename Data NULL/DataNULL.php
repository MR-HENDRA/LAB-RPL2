<?php

echo <<<HENDRA
Nilai NULL merepesentasikan sebuah variabel tanpa nilai
Saat kita membbuat variable lalu ingin menghapus data yang terdapat di variable tersebut,
kita  bisa menggunakan NULL untuk mengosongkan variable tersebut
Untuk membuat data NULL, kita bisa menggunakan kata kunci NULL (case insentivite).
HENDRA;

$name = "Hendra";
$name = NULL;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age :";
echo $age;
echo "\n";

#---> Output:
#Nilai NULL merepesentasikan sebuah variabel tanpa nilai Saat kita membbuat variable lalu ingin menghapus data yang terdapat di variable tersebut, kita bisa menggunakan NULL untuk mengosongkan variable tersebut Untuk membuat data NULL, kita bisa menggunakan kata kunci NULL (case insentivite).
#Name : 
#Age :

?>
