<?php
echo "<b>Daftar Nilai Siswa di Atas Rata-rata Kelas</b><br>";

$dataSiswa = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];


$totalNilai = 0;
foreach ($dataSiswa as $siswa) {
    $totalNilai += $siswa[1];
}
$rataRata = $totalNilai / count($dataSiswa);

echo "Rata-rata kelas: <b>$rataRata</b><br>";
echo "Siswa yang nilainya di atas rata-rata:<br>";

foreach ($dataSiswa as $siswa) {
    if ($siswa[1] > $rataRata) {
        echo "Nama: <b>{$siswa[0]}</b>, Nilai: <b>{$siswa[1]}</b><br>";
    }
}
echo "<hr>";
?>