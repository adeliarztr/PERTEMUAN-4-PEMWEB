<?php
echo "<hr>";
echo "<b>Studi Kasus Skor Game & Hadiah</b><br>";

$skorPemain = 520;

echo "Total skor pemain adalah: $skorPemain<br>";

$hadiah = ($skorPemain > 500) ? "YA" : "TIDAK";
echo "Apakah pemain mendapatkan hadiah tambahan? ($hadiah)<br>";
?>