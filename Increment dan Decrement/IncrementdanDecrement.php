<?php

$a=10; 
$b= ++$a; // Pre increment

var_dump($a); // 11 
var_dump($b); // 11 

echo"<br>";

$a=10; 
$b=$a++; // Post increment

var_dump($a); // 11
var_dump($b); // 10

echo"<br>";

$a=10; 
$b= --$a; // Pre Decrement

var_dump($a); // 9
var_dump($b); // 9

echo "<br>";

$a=10; 
$b= $a--; // Pos Decrement

var_dump($a); // 9
var_dump($b); // 10

?>