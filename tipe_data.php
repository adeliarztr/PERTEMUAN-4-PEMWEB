<?php
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;


echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
echo "Variabel c: {$c} <br>";
echo "Variabel d: {$d} <br>";
echo "Variabel e: {$e} <br>";
var_dump($e);
echo "<hr>";


$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;


echo "apakahSiswaLulus: ";
var_dump($apakahSiswaLulus);
echo "<br>";
echo "apakahSiswaSudahUjian: ";
var_dump($apakahSiswaSudahUjian);
echo "<hr>";


$namaDepan = "Ibnu";
$namaBelakang = 'Jakaria';

$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan . ' ' . $namaBelakang;

echo "Nama Depan: {$namaDepan} <br>";
echo 'Nama Belakang: ' . $namaBelakang . '<br>';
echo "Nama Lengkap: {$namaLengkap}<br>";
echo "<hr>";


$listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"];
echo "Mahasiswa pertama: " . $listMahasiswa[0] . "<br>";
?>