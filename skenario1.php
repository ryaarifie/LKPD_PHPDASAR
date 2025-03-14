<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skenario Pertama</title>
</head>
<body>
<div class="flex flex-col gap-4 justify-center p-6 bg-white shadow-lg rounded-lg">
        <h1 class="bg-green-600 font-bold text-4xl text-white p-4 text-center">Skenario Pertama</h1>

        <form method="POST" class="flex flex-col gap-4">
            <input type="text" name="nilai" placeholder="Masukkan nilai" class="">
            <button type="submit" class="">Submit</button>
        </form>

        <?php
            $nilai = isset($_POST['nilai']) && $_POST['nilai'] !== "" ? $_POST['nilai'] : 10;
            echo "<h2 class=''>Nilai kamu: $nilai</h2>";
            
            if($nilai < 0 || $nilai > 100) {
                echo "<p>Bohong banget tuh, mana ada nilai segitu. Nilai wajib di antara 0 - 100</p>";
            } elseif($nilai >= 90) {
                echo "<p'> Mantap, nilai kamu $nilai, kamu dapat A</p>";
            } elseif($nilai >= 80) {
                echo "<p> Boleh juga tuh, nilai kamu $nilai, kamu dapat B</p>";
            } elseif($nilai >= 70) {
                echo "<p class=''>Tingkatin lagi ya, nilai kamu $nilai, kamu dapat C</p>";
            } elseif($nilai >= 0) {
                echo "<p class=''>Coba lagi ya, nilai kamu $nilai, kamu dapat D</p>";
            }
        ?>
    </div>
</body>
</html>