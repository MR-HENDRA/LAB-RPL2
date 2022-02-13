<?php
$mahasiswa = [
    ["Hendra", "D0221079", "Teknik Informatika", "hendra@gmail.com"],
    ["Fyan", "D0221078", "Teknik Informatika", "fyan@gmail.com"],
    ["Arif", "D0221080", "Teknik Informatika", "arif@gmail.com"],
    ["Ryan", "D0221081", "Teknik Informatika", "ryan@gmail.com"],


];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>
<?php foreach($mahasiswa as $mhs): ?>
<ul>
    <li>Nama : <?= $mhs[0]?></li>
    <li>NIM : <?= $mhs[1]?></li>
    <li>Jurusan: <?= $mhs[2]?></li>
    <li>Email: <?= $mhs[3]?></li>
</ul>
<?php endforeach; ?>