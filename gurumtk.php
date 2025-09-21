<?php


echo "<hr>";
echo "<b>Soal Cerita Guru Matematika</b><br>";

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];


sort($nilaiSiswa);


$nilaiDigunakan = array_slice($nilaiSiswa, 2, count($nilaiSiswa) - 4);


$totalNilai = array_sum($nilaiDigunakan);


$rataRata = $totalNilai / count($nilaiDigunakan);

echo "Nilai yang digunakan: " . implode(", ", $nilaiDigunakan) . "<br>";
echo "Total nilai setelah mengabaikan dua tertinggi dan dua terendah: $totalNilai<br>";
echo "Rata-rata nilai: " . round($rataRata, 2) . "<br>";

?>