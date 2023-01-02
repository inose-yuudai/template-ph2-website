<?php

function round_number( $number ){
    return round($number);
}

$numbers = [1.24,2.32,3.56,4.92,5.02];

$rouned_numbers = array_map("round_number", $numbers);

print_r($rouned_numbers);

// array_map("配列を加工するための関数"、加工対象の配列)