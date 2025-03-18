<?php
$jam = "20:00";
$tugas = true;
$aktivitas = "";

if ($jam >= "15:30" && $jam < "15:45") {
    $aktivitas = "Andi Pulang sekolah dan tiba di rumah";
} elseif ($jam >= "15:45" && $jam < "15:50") {
    $aktivitas = "Andi Mandi sebelum mengaji";
} elseif ($jam >= "15:50" && $jam < "16:20") {
    $aktivitas = "Waktu Andi Mengaji";
} elseif ($jam >= "16:20" && $jam < "18:20") {
    $aktivitas = "Andi Mengerjakan tugas sekolah";
} elseif ($jam >= "18:20" && $jam < "19:00") {
    $aktivitas = "Andi Disuruh ibu membeli bumbu masak, sholat magrib, dan makan malam";
} elseif ($jam >= "19:00" && $jam < "20:30") {
    $aktivitas = "Waktu luang / Free time";
} elseif ($jam >= "20:30" && $jam < "21:00") {
    $aktivitas = "Andi Menghafal Dialog untuk festival";
} elseif ($jam >= "21:00" && $jam < "21:30") {
    $aktivitas = "Andi Chatting dengan Raya yang berada di Arab (Di Arab jam 17:00 - 17:30)";
} elseif ($jam >= "21:30" && $jam < "22:00") {
    $aktivitas = "Andi mengobrol dengan keluarga sebelum tidur";
} elseif ($jam >= "22:00" || $jam < "04:00") {
    $aktivitas = "Andi tidur";
} else {
    $aktivitas = "Tidak ada aktivitas terjadwal";
}

echo "$jam = $aktivitas";

echo "  <br>";
echo "  <br>";
echo "Jadwal Harian Andi:<br>";
echo "15:30 - 15:45 - Andi Pulang sekolah dan tiba dirumah<br>";
echo "15:45 - 15:50 - Andi Mandi sebelum mengaji<br>";
echo "15:50 - 16:20 - Waktu Andi Mengaji<br>";
echo "16:20 - 18:20 - Andi Mengerjakan tugas sekolah<br>";
echo "18:20 - 19:00 - Andi Disuruh ibu membeli bumbu masak, sholat magrib, dan makan malam<br>";
echo "19:00 - 20:30 - Waktu luang / Free time<br>";
echo "20:30 - 21:00 - Andi Menghafal Dialog untuk festival<br>";
echo "21:00 - 21:30 - Andi Chatting dengan Raya yang berada di Arab (Di arab jam 17:00 - 17:30)
 <br>";
echo "21:30 - 22:00 - Andi mengobrol dengan keluarga sebelum tidur<br>";
echo "22:00 - 04:00 - Andi tidur<br>";



?>
