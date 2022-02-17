<?php

// Array Associative
// key nya adalah string yang kita buat sendiri

$mahasiswa = [
    [
        "nama" => "Hendra Usman",
        "NIM" => "D0221079",
        "jurusan" => "Teknik Informatika",
        "email" => "hendra@gmail.com"

    ],
    [
        "nama" => "Fyan Ramadhan",
        "NIM" => "D0221085",
        "jurusan" => "Ilmu Komputer",
        "email" => "fyan@gmail.com"
    ]]

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
            <li>Nama : <?= $mhs["nama"]?></li>
            <li>NIM : <?= $mhs["NIM"]?></li>
            <li>Jurusan: <?= $mhs["jurusan"]?></li>
            <li>Email: <?= $mhs["email"]?></li>
        </ul>
    <?php endforeach; ?>
