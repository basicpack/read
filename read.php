<?php
//Criado por Anderson Ismael
//01 de março de 2019

function read($prompt=''){
    return preg_split('/\s+/', trim(read_from_console($prompt)))   
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
