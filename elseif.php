<?php
$d = date("D");

if ($d == "Sat") {
    echo "Selamat berakhir pekan!";
} elseif ($d == "Sun") {
    echo "Selamat menikmati akhir pekan!";
} elseif ($d == "Mon") {
    echo "Semoga awal minggu anda menyenangkan!";
} else {
    echo "Semoga hari anda menyenangkan!";
}
?>
