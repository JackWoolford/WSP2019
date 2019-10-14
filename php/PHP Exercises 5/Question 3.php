<form action = '<?php echo $_SERVER["PHP_SELF"];?>' method='post'>
    <p>        
        Year to convert: <input type='text' name='year'>
    </p>

    <p>
        <input type='submit' name='submit' value='Submit'>
    </p>
</form>

<?php
function convertToRoman($year) {
    $n = intval($year);
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
        $matches = intval($n / $number);

        $res .= str_repeat($roman, $matches);

        $n = $n % $number;
    }
    return $res;
}

echo convertToRoman($_POST['year']);
echo $year;
?>