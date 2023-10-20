<?php
echo "contoh 1 <br>";
//membuat array yang berisi nama bauh-buahan
$buah = array('semangka', 'jeruk', 'apel', 'anggur'); // dimulai dari angka 0 bukan 1
//menampilkan data array dengan nomor urut 2
echo $buah[0];

echo "<br><br>=================== <br><br>";

echo "contoh 2 <br>";
//penamaan isi array
$buah['semangka'] = "isinya merah";
$buah['jeruk'] = "rasanya manis";
$buah['apel'] = "warnanya merah";
$buah['anggur'] = "harganya mahal";

//menampilkan isi array yang bernama jeruk
echo $buah['jeruk'];

echo "<br><br>=================== <br><br>";

echo "contoh Array dengan Looping for <br><br>";
//membuat array yang berisi nama bauh-buahan
$buah = array('semangka', 'jeruk', 'apel', 'anggur');
//count() untuk menghitung isi array
for ($x = 0; $x < count($buah); $x++) {
    echo $buah[$x] . "<br>";
}
