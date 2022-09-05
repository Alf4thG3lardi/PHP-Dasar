<?php
    echo "Belajar PHP <br>";
    echo "belajar php <br>" ;
    $angka= 69;
    $huruf= "PHP";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= $huruf ?>
    <?php
        echo "<br>";
        echo $angka;
        echo "<h1>$huruf<h1>";
        echo '<h1>'.$huruf."<h1>";
    ?>
</body>
</html>