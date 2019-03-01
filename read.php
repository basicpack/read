<?php
//Criado por Anderson Ismael
//01 de março de 2019

function read($prompt = '') {
    if ( function_exists('readline') ) {
        $line = trim(readline($prompt));
        if (!empty($line)) {
            readline_add_history($line);
        }
    } else {
        echo $prompt;
        $line = trim(fgets(STDIN));
    }
    $arr= preg_split('/\s+/', trim(read()));
    return implode(' ',$arr);
}
