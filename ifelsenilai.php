<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./src/output.css">
</head>

<body>
    <div class="flex flex-col gap-4 justify-center ">
        <h1 class="bg-green-600 font-bold text-4xl text-white">Skenario Pertama</h1>

    
    <?php
        $nilai = 10;
        echo"<h2 class='bg-red-600 text-2xl text-white '>Nilai kamu : $nilai</h2>";
        if($nilai <0 || $nilai > 100) {
            echo"Bohong banget tuh, mana ada nilai segitu. Nilai wajib di antara 0 - 100";
        } elseif($nilai >=90) {
            echo"Mantap, nilai kamu $nilai, kamu dapat A";
        } elseif($nilai >=80) {
            echo"Boleh juga tuh, nilai kamu $nilai, kamu dapat B";
        } elseif($nilai >=70) {
            echo"Tingkatin lagi ya, nilai kamu $nilai, kamu dapat C";
        } elseif($nilai >=0) {
            echo"Coba lagi ya, nilai kamu $nilai, kamu dapat D";
        } 

        ?>
        </div>

    <div class="">
        <h1>Skenario Kedua</h2>
        <?php
         $jam = "14:59";
         echo"<p>Jam : $jam </p>";

         if ($jam >= "00:00" && $jam < "04:00") {
            $keterangan = "Dini hari, begadang lagi?";
        } else if ($jam >= "04:01" && $jam < "10:00") {
            $keterangan = "Pagi, Waktunya Berangkat Kerja";
        } else if ($jam >= "10:00" && $jam < "15:00") {
            $keterangan = "Siang, Waktunya Makan Siang";
        } else if ($jam >= "15:00" && $jam < "17:30") {
            $keterangan = "Sore, Masih Kerja";
        } else if ($jam >= "17:30" && $jam < "18:30") {
            $keterangan = "Petang, waktunya bersantai";
        } else if ($jam >= "18:30" && $jam <= "24:00") {
            $keterangan = "Malam, waktunya tidur";
        } else {
            $keterangan = "Kamu dari Dunia lain mana?";
        }

        echo"<h3>$keterangan</h3>";

        ?>
        
    </div>

    <div class="">
        <h1>Skenario Ketiga</h1>
       <?php
        $jadwal = [
    ["15:30 - 15:45", "Pulang Sekolah dan OTW ke rumah"],
    ["15:45 - 16:00", "Mandi"],
    ["16:00 - 16:30", "Ngaji"],
    ["16:30 - 17:00", "Menghapal Dialog"],
    ["17:00 - 17:45", "Waktu Luang"],
    ["17:45 - 18:00", "Beli Bumbu"],
    ["18:00 - 18:30", "Sholat Maghrib dan Makan Malam"],
    ["18:30 - 19:00", "Chattingan dengan Raya"],
    ["19:00 - 19:15", "Persiapan Sholat Isya"],
    ["19:15 - 21:15", "Mengerjakan Tugas"],
    ["21:15 - 21:45", "Ngobrol dengan Keluarga"],
    ["21:45 - 22:00", "Menyiapkan Waktu Luang"],
    ["22:00 - 04:00", "Tidur"]
];

$waktu = "18:20"; // Ganti sesuai dengan waktu yang ingin dicek
$tugas_sekolah = true; // Ubah ke true jika ada tugas sekolah

echo "<h2>Jadwal Harian Andi</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0' style='border-collapse: collapse; width: 50%; text-align: left;'>";
echo "<tr style='background-color: #f2f2f2;'><th style='border: 1px solid black; text-align: center; padding: 8px;'>Waktu</th><th style='border: 1px solid black; text-align: center; padding: 8px;'>Kegiatan</th></tr>";

foreach ($jadwal as $item) {
    echo "<tr style='border: 1px solid black;'><td style='border: 1px solid black; padding: 8px;'>{$item[0]}</td><td style='border: 1px solid black; padding: 8px;'>{$item[1]}</td></tr>";
}

echo "</table>";
echo "<p>Waktu saat ini: $waktu</p>";

foreach ($jadwal as $item) {
    list($jam, $kegiatan) = $item;
    list($start, $end) = explode(" - ", $jam);
    if ($waktu >= $start && $waktu < $end) {
        echo "<p>Saat ini: $kegiatan</p>";
        break;
    }
}

echo "<p>Nama: Satrya Arif</p>";
echo "<p>Pasangan Kelompok: Fadhil Al Ghaza Aswadira</p>";
?>

        
    </div>
    <div>
        <h1>Skenario Keempat</h1>
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

</body>
</html>