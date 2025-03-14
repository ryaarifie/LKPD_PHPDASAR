<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <h1>Skenario Kedua</h1>

        <form method="POST">
            <input type="time" name="jam">
            <button type="submit">Submit</button>
        </form>

        <?php
            $jam = isset($_POST['jam']) && $_POST['jam'] !== "" ? $_POST['jam'] : "14:59";
            echo "<p>Jam : $jam</p>";

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

            echo "<h3>$keterangan</h3>";
        ?>
    </div>
</body>
</html>