<?php

$array = [40, 16, 9, 28, 32, 12, 54, 8, 4, 2, 56];
$number = 33;

//At first - sort an array
sort($array);

function binarySearch($number, $array)
{
//Find mid element
    $count = count($array);
    if ($count <= 1) {
        if ($number == $array[0]) {
            echo "found this is $array[0] \n";
            exit();
        } else {
            echo "element not found! \n";
            exit();
        }
    }
    $middleIndex = floor($count / 2);
    $middleElement = $array[$middleIndex];

    if ($number == $middleElement) {
        echo "found this is $middleElement \n";
        exit();
    }

//compare with number
    if ($number > $middleElement) {
        $part = array_slice($array, $middleIndex);
        echo "$number больше $middleElement \n";
        var_dump($part);
        binarySearch($number, $part);
    } else {
        $part = array_slice($array, 0, $middleIndex);
        echo "$number меньше $middleElement \n";
        var_dump($part);
        binarySearch($number, $part);
    }
}

binarySearch($number, $array);