<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$hasilModulus = $a % $b;
$hasilPangkat = $a ** $b;

echo "<b>Operasi Matematika PHP</b><br>";
echo "Nilai a = $a<br>";
echo "Nilai b = $b<br><hr>";

echo "Hasil Tambah: $hasilTambah<br>";
echo "Hasil Kurang: $hasilKurang<br>";
echo "Hasil Kali: $hasilKali<br>";
echo "Hasil Bagi: $hasilBagi<br>";
echo "Hasil Modulus: $hasilModulus<br>";
echo "Hasil Pangkat: $hasilPangkat<br>";

echo "<hr>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<b>Operator Perbandingan PHP</b><br>";
echo "Apakah a == b? : " . ($hasilSama ? 'true' : 'false') . "<br>";
echo "Apakah a != b? : " . ($hasilTidakSama ? 'true' : 'false') . "<br>";
echo "Apakah a < b? : " . ($hasilLebihKecil ? 'true' : 'false') . "<br>";
echo "Apakah a > b? : " . ($hasilLebihBesar ? 'true' : 'false') . "<br>";
echo "Apakah a <= b? : " . ($hasilLebihKecilSama ? 'true' : 'false') . "<br>";
echo "Apakah a >= b? : " . ($hasilLebihBesarSama ? 'true' : 'false') . "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "<hr>";
echo "<b>Operator Logika PHP</b><br>";
echo "a && b : " . ($hasilAnd ? 'true' : 'false') . "<br>";
echo "a || b : " . ($hasilOr ? 'true' : 'false') . "<br>";
echo "!a : " . ($hasilNotA ? 'true' : 'false') . "<br>";
echo "!b : " . ($hasilNotB ? 'true' : 'false') . "<br>";

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

echo "<hr>";
echo "<b>Operator Penugasan PHP</b><br>";
echo "Nilai a setelah a += b: $a<br>";
echo "Nilai a setelah a -= b: $a<br>";
echo "Nilai a setelah a *= b: $a<br>";
echo "Nilai a setelah a /= b: $a<br>";
echo "Nilai a setelah a %= b: $a<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "<hr>";
echo "<b>Operator Identitas PHP</b><br>";
echo "Apakah a === b? : " . ($hasilIdentik ? 'true' : 'false') . "<br>";
echo "Apakah a !== b? : " . ($hasilTidakIdentik ? 'true' : 'false') . "<br>";
?>