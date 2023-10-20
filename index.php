<?php

echo "Hello World ! <br>";
echo "=========================<br>";

//Ini adalah komentar yang tidak akan dicetak
/*Ini juga adalah komentar */

//Sintaks Dasar
$nama = "Pelita Nur Najmina";
$alamat = "Bandung";
$umur = "23";

echo "Nama Saya $nama <br>";
echo "Rumah saya di $alamat <br>";
echo "Umur saya $umur tahun <br>";

echo "=========================<br>";
//aritmatika
$a = 5;
$b = 2;

//penjumlahan
$c = $a + $b;           //operasinya
echo "$a + $b = $c";    //hasil dan visual
echo "<hr>";

//pengurangan
$c = $a - $b;
echo "$a - $b = $c";
echo "<hr>";

//perkalian
$c = $a * $b;
echo "$a * $b = $c";
echo "<hr>";

//pembagian
$c = $a / $b;
echo "$a / $b = $c";
echo "<hr>";

//sisa bagi
$c = $a % $b;
echo "$a % $b = $c";
echo "<hr>";

//pangkat
$c = $a ** $b;
echo "$a ** $b = $c";
echo "<hr>";

echo "===============================<br>";

//Increment dan Decrement
$angka = 0;

$angka++;
$angka++;
$angka++;
$angka--;
$angka--;

echo $angka;

echo "==================================<br>";

// true == 1
//false == ''
//operator logika
$a = 6;
$b = 2;
// menggunakan operator relasi lebih besar
$c = $a > $b;
echo "$a > $b: $c";
echo "<hr>";
// menggunakan operator relasi lebih kecil
$c = $a < $b;
echo "$a < $b: $c";
echo "<hr>";
// menggunakan operator relasi lebih sama dengan
$c = $a == $b;
echo "$a == $b: $c";
echo "<hr>";
// menggunakan operator relasi lebih tidak sama dengan $c = $a != $b;
echo "$a != $b: $c";
echo "<hr>";
// menggunakan operator relasi lebih besar sama dengan $c = $a >= $b;
echo "$a >= $b: $c";
echo "<hr>";
// menggunakan operator relasi lebih kecil sama dengan $c = $a <= $b;
echo "$a <= $b: $c";
echo "<hr>";
