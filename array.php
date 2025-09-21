<?php
echo "<b>Daftar Nilai Siswa yang Lulus</b><br>";
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}

echo implode(', ', $nilaiLulus) . "<br><hr>";

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika';

echo "<b>Daftar Nilai Mahasiswa dalam Mata Kuliah $mataKuliah</b><br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: <b>{$nilai[0]}</b>, Nilai: <b>{$nilai[1]}</b> <br>";
}
echo "<hr>";
?>