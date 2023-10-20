// blok kode diekskusi sekali dan kemudian kondisi dievaluasi.
// jika kondisi benar, pernyataan diulangi selama kondisi yang ditentukan benar.
<?php

$ulangi = 10;

do {
    echo "<p>ini adalah perulangan ke-$ulangi</p>"; // Blok kode yang akan diulang
    $ulangi--;
} while ($ulangi > 0);  // while (<kondisi>)
