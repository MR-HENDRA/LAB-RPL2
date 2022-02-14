<?php
function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama!";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>latihan Function</title>
</head>
<body>
    <h1><?= salam("Malam", "Hendra Usman"); ?></h1>
</body>
</html>