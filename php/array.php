<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Soal Array </h1>
    
    <?php
    echo "<h4>Soal 1<h4>";

    $football_club = ['arsenal', 'liverpool', 'chelsea', 'manchester united'];

    print_r($football_club);
    
    echo "<h4>Soal 2<h4>";

    echo ":Total football Club: " . count($football_club); // Berapa panjang array kids
    echo "<br>"; 
    echo "<ol>"; 
    echo "<li> $football_club[0] </li>";
    echo "<li> $football_club[1] </li>";
    echo "<li> $football_club[2] </li>";
    echo "<li> $football_club[3] </li>";
     // Lanjutkan

     echo "</ol>";

     echo "<h4>Soal 3</h4>";

     $football_clubArr = [
        ["id" => "001", "name" => "arsenal", "location" => "london"],
        ["id" => "002", "name" => "liverpool", "location" => "liverpool"],
        ["id" => "003", "name" => "chelsea", "location" => "london"],
     ];

     echo "<pre>";
     print_r($football_clubArr);
     echo "</pre>";

    ?>
</body>
</html>