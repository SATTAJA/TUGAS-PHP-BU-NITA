<?php
$jam = "15:00"; //ganti jam untuk cek hasilnya
echo "jam $jam = ";
waktu($jam);

function waktu($jam)
{
    if ($jam <= "00:00" && $jam >= "04:00") {
        echo "Dini hari";
    } elseif ($jam >= "04:00" && $jam <= "10:00") {
        echo "Pagi";
    } elseif ($jam >= "10:00" && $jam <= "15:00") {
        echo "Siang";
    } elseif ($jam >= "15:00" && $jam <= "17:30") {
        echo "Sore";
    } elseif ($jam >= "17:30" && $jam <= "18:30") {
        echo "Petang";
    } elseif ($jam >= "18:30" && $jam <= "24:00") {
        echo "Malam";
    } else {
        echo "Dunia Lain";
    }
}