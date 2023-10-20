<?php
$nama1 = array(
    "Nama" => "Pelita",
    "Umur" => 23,
    "Kelas" => "Laravel"
);

$nama2 = array(
    "Nama" => "Najmina",
    "Umur" => 20,
    "Kelas" => "Node Js"
);

$nama3 = array(
    "Nama" => "Fahmi",
    "Umur" => 26,
    "Kelas" => "Digital Marketing"
);

$nama4 = array(
    "Nama" => "Anita",
    "Umur" => 21,
    "Kelas" => "UI/UX Designer"
);

$nama5 = array(
    "Nama" => "Nasa",
    "Umur" => 23,
    "Kelas" => "Graphic Designer"
);

$namaarray = array($nama1, $nama2, $nama3, $nama4, $nama5);

// Menampilkan informasi individu
foreach ($namaarray as $nama) {     //menggunakan perulangan foreach untuk menampilkan informasi nama.
    echo "Nama: " . $nama["Nama"] . ", Umur: " . $nama["Umur"] . " tahun, Kelas: " . $nama["Kelas"] . "<br>";
}
