<?php

function hello($name){
    echo "Hola " . $name . " !";
}

function hello2($name,$sn1="Curto"){
    echo "Hola " . $name . " " . $sn1 . " !";
}

function printArgs($args) {
    foreach ($args as $arg) {
        echo $arg . ',';
    }
}
//Inline refractor per juntar 2 linies.
function sum () {
    return array_sum(func_get_args());
}

//Funció per obtenir la uri.
/*
function uri() {
    return trim($_SERVER['REQUEST_URI'],'/');
}
*/