<?php
$mahasiswa = [
    ["Hendra", "D0221079", "Teknik Informatika", "hendra@gmail.com"],
    ["Fyan", "D0221078", "Teknik Informatika", "fyan@gmail.com"],
    ["Arif", "D0221080", "Teknik Informatika", "arif@gmail.com"],


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
    <li><?= $mhs[0]?></li>
    <li><?= $mhs[1]?></li>
    <li><?= $mhs[2]?></li>
</ul>
<?php endforeach; ?>