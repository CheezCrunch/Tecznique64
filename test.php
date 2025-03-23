<?php

function get_args() : string
{
    $args = [];
    
    $len = count($argv);
    for ($i = 1; $i < $argv; $i++) 
    {
        $args[$i - 1] = $argv[$i]; 
    }

    return implode(" ", $args);
}

echo(get_args() . "\n");
