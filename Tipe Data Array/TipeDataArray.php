<?php

#---> 1. Array adalah tipe data yang berisikan kosong atau banyak data. 
#---> 2. Array di PHP bisa berisikan data dengan jenis berbeda-beda.
#---> 3. Array di PHP memiliki panjang dinamis, artinya kita bisa menambah data ke Array
#---> sebanyak-banyaknya, tidak dibatasi kapasitasnya.

$value = array(18, 9, 8, 7.5);
var_dump($value);

$name = ["Hendra", "Usman", "Ndraa"];
var_dump($name);

var_dump($name[0]); // mengakses data di array pada nomor index

$name[2] = "Hendri"; // mengubah data di array pada nomor index dengan value baru
var_dump($name); 

$name[] = "Ali"; // menambah data di array pada posisi paling belakang
var_dump($name);

unset($name[1]);
var_dump($name);

var_dump(count($name));

?>