<?php

$arr1 = [1,5,34,54,78,562,655,864,6543,6632,7777,7778,46266,24562];

function linearSearch($array, $value)
{
    foreach ($array as $key => $val) {
        if ($val === $value) {
            return $key;
        }
    }
}

var_dump(linearSearch($arr1, 6632));