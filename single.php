<?php

// single byte injection implementation

function generate_random_byte() 
{
    $alphabet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    return $alphabet[random_int(0, strlen($alphabet) - 1)];
}

function tecznique64_encode(string $input, string &$byte, int &$index) : string
{
    $output = base64_encode($input);
    $output = strrev($output);
    $output = trim($output);
    $output = str_replace("=", "", $output);
    $len = strlen($output);    

    $num = random_int(0, $len - 1);
    $byte = $output[$num];
    $index = $num;

    $output[$num] = generate_random_byte();
    $output = bin2hex($output);

    return $output;
}

function tecznique64_decode(string $input, string $byte, int $index) : string
{
    $output = hex2bin($input);
    $output[$index] = $byte;
    $output = strrev($output);

    return base64_decode($output);
}
