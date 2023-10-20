<?php
$nilai = 90;  // Ganti dengan nilai yang ingin diuji

// Menghitung kategori berdasarkan nilai
$kategori = '';

switch (true) {
    case ($nilai >= 90 && $nilai <= 100):
        $kategori = 'A';
        break;
    case ($nilai > 80 && $nilai < 90):
        $kategori = 'B';
        break;
    case ($nilai > 70 && $nilai <= 80):
        $kategori = 'C';
        break;
    case ($nilai >= 0 && $nilai <= 70):
        $kategori = 'D';
        break;
    default:
        $kategori = 'Nilai tidak ditemukan';
        break;
}

echo "Nilai Anda: $nilai, <br>kategori: $kategori";
