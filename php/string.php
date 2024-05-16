<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="http-equiv=X-UM-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Soal String</h1>
    
    <?php
    echo "<h3>Soal no 1</h3>";

    $kalimat1 = "selamat datang di sanbercode";

    echo "panjang string kalimat 1: " . strlen($kalimat1) . "<br>";
    echo "panjang kata kalimat 1: " . str_word_count($kalimat1) . "<br>";

    echo "<h3>Soal no 2</h3>";

    $kalimat2 = "Lorem ipsum dolor amet";

    echo "kata pertama kalimat 2: " . substr($kalimat2, 0, 5) . "<br>";
    echo "kata kedua kalimat 2: " . substr($kalimat2, 6, 5) . "<br>";
    echo "kata ketiga kalimat 2: " . substr($kalimat2, 12, 5) . "<br>";
    echo "kata keempat kalimat 2: " . substr($kalimat2, 18) . "<br>";


    echo "<h3>Soal no 3</h3>";
    
    $kalimat3 = "Saya sedang belajar";

    echo "Sebelum : " . $kalimat3 . "<br>";
    echo "Sesudah : " . str_replace("belajar", "makan", $kalimat3) . "<br>";
    ?>
</body>
</html>