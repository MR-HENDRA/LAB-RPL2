<?php

echo "Decimal : ";
var_dump(1234); //output: int(1234)

echo "Octal : ";
var_dump(01234); //output: int(668)

echo "Hexadecimal : ";
var_dump(0x1F); //output: int(26) //cara kerja: 

echo "Binary : ";
var_dump(0b111111); //output: int(63) //cara kerja: 1: = 1, 11: 1+1+=3, 111: 3+3+1=7, 1111:7+7+1=15, 11111: 15+15+1=31, 111111: 31+31+1=63

echo "Underscore in number : ";
var_dump(1_241_241_241);

echo "Floating Point : ";
var_dump(1.234);

echo "Floating Point dengan E Notation : (1.7 x 1000) : ";
var_dump(1.7e3);

echo "Floating Point dengan E Notation minus : (1.7 x 0.001) : ";
var_dump(1.7e-3);

echo "Underscore di floating point : ";
var_dump(1_123.123);

echo "Integer Overflow : ";
var_dump(9223372036854775808);
?>