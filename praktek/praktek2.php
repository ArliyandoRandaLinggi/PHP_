<?php
$baris = 9;  // Jumlah baris

for ($i = 0; $i < $baris; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";
}

echo "<br><br>==========================================================<br><br>";

echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>No</th>";
echo "<th>Nama</th>";
echo "<th>Kelas</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    echo "<td>$i</td>";
    echo "<td>Nama ke $i</td>";
    echo "<td>Kelas" . (11 - $i) . "</td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
