<?php

$array = [40, 16, 9, 28, 32, 12, 54, 8, 4, 2, 56];
$number = 32;

//At first - sort an array
sort($array);

function binarySearch($number, $array)
{
    //count array elements
    //Verify for empty and 1
    $count = count($array);
    if ($count == 1) {
        if ($number == $array[0]) {
            return "found this is $array[0] \n";
        } else {
            return "element not found! \n";
        }
    } else if ($count == 0) {
        return "Empty Array! \n";
    }

    //Find mid element
    $middleIndex = floor($count / 2);
    $middleElement = $array[$middleIndex];

    //compare with number
    if ($number == $middleElement) {
        return "found this is $middleElement \n";
    }

    //Recursive cut
    if ($number > $middleElement) {
        $part = array_slice($array, $middleIndex);
        binarySearch($number, $part);
    } else {
        $part = array_slice($array, 0, $middleIndex);
        binarySearch($number, $part);
    }
}

binarySearch($number, $array);