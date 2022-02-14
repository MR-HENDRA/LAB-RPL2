<?php
// DATE
// l=day
// d=date
// M=mounth
// Y=years
echo date ("l, d-M-Y");
echo "<br>";
// TIME
echo time ();
//detik yang sudah berlalu sejak 1 Januari 1970
//waktu yang disepakati untuk awal komputer
echo "<br>";
//cara menampilkan hari kedepan secara manual
//contoh 100 hari kedepan dari sekarang
//60=detik
//60=menit
//24=jam
//100=hari kedepan
echo date ("l, d-M-Y", time () +60*60*24*100);
echo "<br>";
//contoh 100 hari kedepan dari sekarang
echo date ("l, d-M-Y", time () -60*60*24*100);
echo "<br>";
//mktime
//mktine(0,0,0,0,0,0)
//jam, menit, detik, bulan, tanggal, tahun
//mencari hari lahir
echo date ("l", mktime(0,0,0,11,2,2005));
echo "<br>";
echo date("l", strtotime("02 nov 2005"));

?>