<?php
// Contoh data
$tinggi_badan_cm = 168; // Tinggi badan dalam cm
$berat_badan_kg = 55; // Berat badan dalam kg

// Menghitung BMI
$tinggi_badan_m = $tinggi_badan_cm / 100; // Mengubah tinggi badan ke meter
$bmi = $berat_badan_kg / ($tinggi_badan_m * $tinggi_badan_m); // Rumus BMI

// Menentukan kategori BMI
if ($bmi < 18.5) {
    $kategori = "kurus";
} elseif ($bmi < 24.9) {
    $kategori = "sedang";
} else {
    $kategori = "gemuk";
}

// Menampilkan output
echo "Halo, Liyan. Nilai BMI anda adalah " . number_format($bmi, 2) . ", anda termasuk $kategori.";

/*
* Berikut adalah klasifikasi BMI umum yang digunakan oleh World Health Organization (WHO):

Kurus (Underweight): BMI kurang dari 18.5
Normal (Normal Weight): BMI antara 18.5 dan 24.9
Gemuk (Overweight): BMI antara 25 dan 29.9
Obesitas (Obese): BMI 30 atau lebih
*/
