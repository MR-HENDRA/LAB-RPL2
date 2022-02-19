<?php
// cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"])  ||
    !isset($_GET["NIM"])  ||
    !isset($_GET["email"])  ||
    !isset($_GET["jurusan"])  ||
    !isset($_GET["gambar"])) {
    // redirect 
    header("Location: Latihan1.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
    <style type="text/css">
        IMG {
            width: 100px;
            height: 100px;
        }
    </style>

</head>
<body>

<ul>
    <li><img src="IMG/<?= $_GET["gambar"]; ?>"></li>
    <li><?= $_GET["nama"]; ?></li>
    <li><?= $_GET["NIM"]; ?></li>
    <li><?= $_GET["email"]; ?></li>
    <li><?= $_GET["jurusan"]; ?></li>
</ul>

<a href="Latihan1.php">Kembali ke Daftar Mahasiswa</a>
</body>
</html>