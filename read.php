<?php
//Criado por Anderson Ismael
//01 de março de 2019

function read($prompt=''){
    $arr=preg_split('/\s+/', trim(read_from_console($prompt)));
    return implode(' ',$arr);
}

function read_from_console ($prompt = '') {
    if ( function_exists('readline') ) {
        $line = trim(readline($prompt));
        if (!empty($line)) {
            readline_add_history($line);
        }
    } else {
        echo $prompt;
        $line = trim(fgets(STDIN));
    }
    return $line;
}
