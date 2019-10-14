<?php

    <p>        
    First name: <input type='text' name='firstName'>
    </p>

    $n = 0;
    $res = '';

    $romanNumber_Array = array(
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'v' => 5,
        'IV' => 4,
        'I' => 1);

    foreach ($romanNumber_Array as $roman => $number) {
        $matches = ($n / $number);

        $res = $res . str_repeat($roman, $matches);

        $n = $n % $number;
    }

    echo $res;


?>