<?php

$array = [40, 16, 9, 28, 32, 12, 54, 8, 4, 2];
$number = 11;

function sequentialSearch($number, $array) {
    foreach ($array as $element) {
        if ($element == $number) {
            echo 'found!';
        }
    }
}

$start_time = hrtime(true);
sequentialSearch($number, $array);
$end_time = hrtime(true);
$execution_time = ($end_time - $start_time) / 1e6; // переводим в миллисекунды
echo "Время выполнения: $execution_time мс.";