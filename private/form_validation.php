<?php
// check wether data enter or not to form
function is_blank($value)
{
    return !isset($value) || trim($value) === '';
}

// data valilabilty
function has_presence($value)
{
    return !is_blank($value);
}

// check lengths of inputs
function has_length_greater_than($value, $min)
{
    $length = strlen($value);
    return $length > $min;
}

function has_length_less_than($value, $max)
{
    $length = strlen($value);
    return $length < $max;
}

function has_length($value, $options)
{
    if (isset($options['min']) && !has_length_greater_than($value, $options['min'] - 1)) {
        return false;
    } elseif (isset($options['max']) && !has_length_less_than($value, $options['max'] + 1)) {
        return false;
    } else {
        return true;
    }
}

// check wether specified characters included in set
function has_inclusion_of($value, $set)
{
    return in_array($value, $set);
}

// check wether didn't include specified characters in set
function has_exclusion_of($value, $set)
{
    return in_array($value, $set);
}

// check specified string include in input
function has_string($value, $required_string)
{
    return strpos($value, $required_string) !== false;
}

// check email validation
function has_valid_email_format($value)
{
    $email_regex = '/\A[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}\Z/i';
    return preg_match($email_regex, $value) === 1;
}

?>