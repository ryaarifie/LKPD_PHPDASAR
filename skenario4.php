<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skenario Keempat</title>
</head>
<body>
<div>
        <h1>Skenario Keempat</h1>
        <P>Kasus 1</P>
        <?php

// Kasus 1: Menampilkan tanggal dengan array dan looping
$hari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
$tanggal = range(1, 31);
$bulan = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des'];
$tahun = [2024, 2025, 2026];

// Menampilkan hari dengan for
for ($i = 0; $i < count($hari); $i++) {
    if ($hari[$i] === 'Senin') {
        $selectedHari = $hari[$i];
    }
}

// Menampilkan tanggal dengan foreach
foreach ($tanggal as $num) {
    if ($num === 10) {
        $selectedTanggal = $num;
    }
}

// Menampilkan bulan dengan while
$j = 0;
while ($j < count($bulan)) {
    if ($bulan[$j] === 'Mar') {
        $selectedBulan = $bulan[$j];
    }
    $j++;
}

// Menampilkan tahun dengan do while
$k = 0;
do {
    if ($tahun[$k] === 2025) {
        $selectedTahun = $tahun[$k];
    }
    $k++;
} while ($k < count($tahun));

echo "$selectedHari, $selectedTanggal - $selectedBulan - $selectedTahun\n";
?>
</div>

<div>

    <p>Kasus 2</p>
    <?php

    $i = 30;
while ($i > 1) {
    echo "Anak ayam turun $i, mati satu tinggal " . ($i - 1) . "\n";
    $i--;
}
echo "Anak ayam turun 1, mati satu tinggal induknya.\n";
?>
</div>

<div>
    <p>Kasus 3</p>
    
    <?php
    echo "<p>Mawar yang dipunyai Sholeh :</p>"; // Tambahkan titik koma (;) di akhir statement ini

    for ($mawar = 21; $mawar >= 10; $mawar--) {
        echo "$mawar, ";
    }

    echo "<p>Mawar yang akan diberikan ke ibunya :</p>"; // Tambahkan titik koma (;) di akhir statement ini

    for ($mawar = 21; $mawar >= 10; $mawar -= 4) {
        echo "$mawar, ";
    }
    
    ?>
</div>

<div>
    <p>Kasus 4</p>
    
   <?php
// Array dalam array untuk musik sesuai suasana hati
$musik = [
    ["Galau", ["Mesin Waktu - Budi Doremi"]],
    ["Bersemangat", ["Selamat Pagi - Ran"]],
    ["Marah", ["Yang Patah Tumbuh, Yang Hilang Berganti - Banda Neira"]]
];

// Menampilkan lagu yang didengarkan Ambyar sesuai suasana hati (tanpa percabangan)
foreach ($musik as $item) {
    $suasana[] = $item[0]; // Menyimpan suasana hati dalam array
    $lagu[] = $item[1]; // Menyimpan lagu dalam array
}

// Menampilkan hasil
for ($i = 0; $i < count($suasana); $i++) {
    echo "Saat " . $suasana[$i] . ", Ambyar mendengarkan: " . implode(", ", $musik[$i][1]) . "<br>";
}
?>
</div>

<p>Pasangan Diskusi : Satrya Arif / 27 & Raihan Latif / 21</p>

</body>
</html>