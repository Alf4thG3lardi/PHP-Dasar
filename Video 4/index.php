<?php 
    $apel= ['manalagi', 'washington', 'merah'];
    $buah= [
        'mangga' => 90,
        'jeruk' => 50,
        'apel' => $apel
    ];
    var_dump($buah);
    echo '<pre>';
    print_r($buah);
    echo '</pre>';

    foreach ($buah as $key => $value) {
        if (!is_array($value)) {
            echo $key.' => '.$value.'<br>';
        }
        else {
            echo $key;
            foreach ($value as $key => $value) {
                echo '<li>'.$value.'</li>';
            }
        }
    }

?>