<?php
// Array berisi nama kecamatan di Kabupaten Sleman
$kecamatan = array(
    "Moyudan",
    "Minggir",
    "Seyegan",
    "Godean",
    "Gamping",
    "Mlati",
    "Depok",
    "Berbah",
    "Prambanan",
    "Kalasan",
    "Ngemplak",
    "Ngaglik",
    "Sleman",
    "Tempel",
    "Turi",
    "Pakem",
    "Cangkringan"
);

// Membuat tabel dengan dua kolom: No dan Kecamatan
echo "<table border='1' cellspacing='0' cellpadding='5'>";
echo "
        <th>No</th> 
        <th>Kecamatan</th>
        </tr>";

// Menampilkan isi tabel dengan nomor urut
$no = 1;
foreach ($kecamatan as $nama) {
    echo "<tr>
            <td align='center'>$no</td>
            <td>$nama</td>
            </tr>";
    $no++;
}

echo "</table>";
