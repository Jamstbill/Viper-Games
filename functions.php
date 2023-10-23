<?php

function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function abort($code = 404){//set the default
    http_response_code($code);
    require ("views/{$code}.php");
    die();
}

function authorise($condition, $status = Response::FORBIDDEN){
    if($condition){
        abort($status);
        }
    }
