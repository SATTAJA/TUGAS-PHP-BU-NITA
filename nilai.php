<?php
$nilai = 80; //ganti nilai untuk cek hasilnya
echo "Nilai $nilai = ";
Tingkatan($nilai);
function Tingkatan($nilai)
{
    if ($nilai <= 100 && $nilai >= 90) {
        echo "A";
    } elseif ($nilai <= 89 && $nilai >= 80) {
        echo "B";
    } elseif ($nilai <= 79 && $nilai >= 70) {
        echo "C";
    } elseif ($nilai <= 69 && $nilai >= 0) {
        echo "D";
    } else {
        echo "Nilai wajib di antara 0 - 100";
    }
}
