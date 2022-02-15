<?php

$first = [
    "first_name" => "Hendra"
];

$last = [
    "first_name" => "Ahmad",
    "last_name" => "Usman"
];

$full = $first + $last;
var_dump($full);

echo "<br>";

$a = [
    "first_name" => "Hendra",
    "last_name" => "Usman"
];

$b = [
    "last_name" => "Usman",
    "first_name" => "Hendra"
];

var_dump($a == $b);
var_dump($a === $b); // juga mengecek urutan

?>