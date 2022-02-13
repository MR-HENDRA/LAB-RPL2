<?php
// pengulangan pada array
// for / foreach
$angka = [3, 52, 17, 81, 10, 24, 56, 63, 85, 76];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan B</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color : pink;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;

        }
        .clear { clear: both; }
    </style>
</head>
<body>

<?php for( $i = 0; $i < count($angka); $i++ ){?> 
    <div class="kotak"><?php echo $angka[$i] ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach( $angka as $a ) { ?>
    <div class="kotak"> <?php echo $a ?> </div>
<?php } ?>

<div class="clear"></div>

<?php foreach( $angka as $a ) : ?>
    <div class="kotak"><?= $a; ?></div>
<?php endforeach; ?>

<?php
// count adalah fungsi untuk menghitung jumlah elemen dalam array
?>