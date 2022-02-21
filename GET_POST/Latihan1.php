<?php
// SUPERGLOBALS
// Variable global milik php
// merupakan Array Associative 

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
    ]
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>GET</title>
    <style type="text/css">
        IMG {
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs) : ?>
    <li>
        <a href="Latihan2.php?nama=<?= $mhs["nama"]; ?>&NIM=<?= $mhs["NIM"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"];?>"><?= $mhs["nama"]; ?></a>
    </li>
<?php endforeach; ?>
</ul>
</body>
</html>


