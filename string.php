<?php
$teks = "Hallo semuanya!<br>";
$teks2= "nomor telponya adalah 0892734837<br>";
echo $teks . " jadi mereka adalah gabungan dari dua variabel yang berbeda <br>" .$teks2;
?>

<?php
$kalimat = "Halo GUYSSSSSSS Hari ini aku sangat Bahagia sekali!";
$jumlah_karakter = strlen($kalimat);

echo "<br>Kalimat: $kalimat <br>";
echo "Jumlah karakter: $jumlah_karakter<br><br>";
?>

<?php
$kalimat = "Gunung Merapi terletak di Yogyakarta.";
$posisi = strpos($kalimat, "Merapi");

echo "Kalimat: $kalimat <br>";
echo "Kata 'Merapi' ditemukan pada posisi ke-$posisi";
?>