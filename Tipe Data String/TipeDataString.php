<?php

//Single Quote
echo 'Nama : ';
echo 'Hendra Usman';

//Double Quote
echo "\n"; // \n ---> berfungsi sebagai ENTER


echo "Nama :";
echo "Hendra\t Usman\n"; // \t ---> berfungsi sebagai TAB

//Multiline String
//Haredoc
echo <<<HENDRA
Ini adalah cara membuat string panjang
dengan cara Haredoc.\n
HENDRA;

//Nowdoc
echo <<<HENDRA
Ini adalah cara membuat string panjang
dengan cara Nowdoc.\n
HENDRA;

?>