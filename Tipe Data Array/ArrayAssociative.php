<?php

// Array Associative
// key nya adalah string yang kita buat sendiri

$mahasiswa = [
    [
        "nama" => "Hendra Usman",
        "NIM" => "D0221079",
        "jurusan" => "Teknik Informatika",
        "email" => "hendra@gmail.com",
        "gambar" => "hndra.jpeg"

    ],
    [
        "nama" => "Fyan Ramadhan",
        "NIM" => "D0221085",
        "jurusan" => "Ilmu Komputer",
        "email" => "fyan@gmail.com",
        "gambar" => "fyan.jpeg"
    ]]

?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    <style type="text/css">
        IMG {
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs): ?>
        <ul>
            <li id="IMG"><IMG src="IMG/<?= $mhs["gambar"] ?>"></li>
            <li>Nama : <?= $mhs["nama"]?></li>
            <li>NIM : <?= $mhs["NIM"]?></li>
            <li>Jurusan: <?= $mhs["jurusan"]?></li>
            <li>Email: <?= $mhs["email"]?></li>
        </ul>
    <?php endforeach; ?>
