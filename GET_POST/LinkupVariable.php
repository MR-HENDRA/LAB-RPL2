<?php
// variable scope / lingkup variable
// global
$x = 10;

function tampilx() {
    global $x;
    echo $x;

}

tampilx();


?>