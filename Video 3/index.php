<?php
    $buah= ['Mangga','Jeruk', 300, 'apel', 500, 2.5];
    var_dump($buah);
    echo '<br>';
    echo $buah[3];
    echo '<br>';
    foreach($buah as $key => $value) {
        echo $key."=>".$value;
        echo "<br>";
    };
    $harga= [
        'apel' => 50000,
        'mangga' => 30000,
        'anggur' => 70000
    ];
    var_dump($harga);
    echo '<br>';
    foreach($harga as $key => $value) {
        echo $key.' harganya '.$value;
        echo "<br>";
    }
    $isi= array_keys($harga);
    var_dump($isi);
    echo '<br>';
    foreach($isi as $isi) {
        echo $isi.'<br>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
</body>
</html>