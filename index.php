<?php

// Linear search algorithm

$arr1 = [1,5,34,54,78,562,655,864,6543,6632,7777,7778,46266,24562];

function linearSearch($array, $value)
{
    foreach ($array as $key => $val) {
        if ($val === $value) {
            return $key;
        }
    }
}

//var_dump(linearSearch($arr1, 6632));

// Binary search algorithm

$arr2 = [1,5,34,54,78,562,655,864,6543,6632,7777,7778,46266,24562];

function binarySearch($haystack, $needle) {

    echo 'Searching' . '<br>';

    $count = floor((count($haystack)/2));
    $midpoint = $count + array_key_first($haystack);


    if ($haystack[$midpoint] == $needle) {
        echo 'Key is: ' . $midpoint;
    } else if ($haystack[$midpoint] > $needle) {
        $haystack = array_slice($haystack, 0, $count, true);
        binarySearch($haystack, $needle);
    } else if (count($haystack) > 1) {
        $haystack = array_slice($haystack, $count, NULL, true);
        binarySearch($haystack, $needle);
    }
}

binarySearch($arr2, 700);
