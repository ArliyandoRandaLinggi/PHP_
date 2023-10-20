<?php
$bintang = 9;  // Jumlah bintang

for ($i = $bintang; $i >= 1; $i--) { //perulangan pertama ($i). perulangan akan terus berjalan selama ($i) lbh bsr dari atau sama dgn 1.
    for ($j = 1; $j <= $i; $j++) {   // perulangan kedua ($j) utk mencetak bintang pada setiap baris berdasarkan nilai (`$i`)
        echo "* ";
    }
    echo "<br>";
}
