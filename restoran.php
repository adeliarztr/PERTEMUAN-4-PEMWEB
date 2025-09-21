<?php

echo "<hr>";
echo "<b>Soal Cerita Kursi Restoran</b><br>";
$totalKursi = 45;
$kursiTerisi = 28;
$kursiKosong = $totalKursi - $kursiTerisi;
$persenKosong = ($kursiKosong / $totalKursi) * 100;

echo "Total kursi: $totalKursi<br>";
echo "Kursi terisi: $kursiTerisi<br>";
echo "Kursi kosong: $kursiKosong<br>";
echo "Persentase kursi kosong: " . round($persenKosong, 2) . "%<br>";
?>