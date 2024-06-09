<?php

$array = [40, 16, 9, 28, 32, 12, 54, 8, 4, 2, 56];
$number = 2;

function sequentialSearch($number, $array) {
    //At first - sort an array
    sort($array);

    //Find element
    foreach ($array as $element) {
        if ($element > $number) {
            echo 'not in array';
            break;
        } else if ($element == $number) {
            echo 'found!';
            break;
        } else {
            echo 'not in array!';
            break;
        }
    }
}

$start_time = hrtime(true);
sequentialSearch($number, $array);
$end_time = hrtime(true);
$execution_time = ($end_time - $start_time) / 1e6; // переводим в миллисекунды
echo "Время выполнения: $execution_time мс.";