<?php

echo "Decimal: ";
var_dump(1234); //output: int(1234)

echo "Octal: ";
var_dump(01234); //output: int(668)

echo "Hexadecimal: ";
var_dump(0x1F); //output: int(26) //cara kerja: 

echo "Binary: ";
var_dump(0b111111); //output: int(63) //cara kerja: 1: = 1, 11: 1+1+=3, 111: 3+3+1=7, 1111:7+7+1=15, 11111: 15+15+1=31, 111111: 31+31+1=63

