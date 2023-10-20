<?php
//Kubus
$sisi = 5;
$volume_kubus = $sisi * $sisi * $sisi;  // s*s*s
echo "Volume Kubus: " . $volume_kubus;

echo "<br>";

//Balok
$panjang = 10;
$lebar = 5;
$tinggi = 3;
$volume_balok = $panjang * $lebar * $tinggi;    // p*l*t
echo "Volume Balok: " . $volume_balok;

echo "<br>";

//Prisma
$luas_alas_prisma = 45;
$tinggi_prisma = 10;
$volume_prisma_segitiga = $luas_alas_prisma * $tinggi_prisma;   // alas * tinggi
echo "Volume Prisma Segitiga: " . $volume_prisma_segitiga;
