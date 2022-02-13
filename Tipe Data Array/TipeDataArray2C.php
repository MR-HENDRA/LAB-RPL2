<?php
$mahasiswa =["Hendra", "D0221079", "Teknik Informatika", "hendra@gmail.com"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<ul>
    <li><?= $mahasiswa[0]?></li>
    <li><?= $mahasiswa[1]?></li>
    <li><?= $mahasiswa[2]?></li>
    <li><?= $mahasiswa[3]?></li>
</ul>
