<?php
$d = date("D");

if ($d == "Mon") {
    echo "Hari ini Senin, waktunya semangat baru!";
} elseif ($d == "Tue") {
    echo "Hari Selasa, teruskan produktivitasmu!";
} elseif ($d == "Wed") {
    echo "Hari Rabu, separuh minggu sudah terlewati!";
} elseif ($d == "Sat") {
    echo "Hari Sabtu! Saatnya bersantai~";
} elseif ($d == "Sun") {
    echo "Hari Minggu! Nikmati waktu istirahatmu!";
} else {
    echo "Hari Kamis atau Jumat, tetap semangat bekerja!";
}
?>
