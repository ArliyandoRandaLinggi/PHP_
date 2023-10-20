<?php
$number = 9;  // Jumlah bilangan yang ingin ditampilkan

for ($i = 1; $i <= $number; $i++) {
    if ($i % 2 === 0) {  // ngecek apakah $i adalah bilangan genap atau ganjil menggunakan operator modulus (%). Jika hasil dari $i % 2 adalah 0, maka itu adalah bilangan genap. Jika bukan, itu adalah bilangan ganjil.
        echo "$i adalah bilangan genap <br>";
    } else {
        echo "$i adalah bilangan ganjil <br>";
    }
}

