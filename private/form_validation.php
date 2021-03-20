<?php
// check weather data enter or not to form
function is_blank($value) {
    return !isset($value) || trim($value) === '';
}

// data valilabilty
function has_presence($value) {
    return !is_blank($value);
}

// check lengths of inputs
function has_length_greater_than($value,$min) {
    $length = strlen($value);
    return $length > $min;
}

function has_length_less_than($value,$max) {
    $length = strlen($value);
    return $length < $max;
}

?>