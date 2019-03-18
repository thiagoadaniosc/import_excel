<?php

function getView($view, array $data){
    $data = (object) $data;
    foreach ($data as $key=>$value){
        ${$key} = $value;
    }
    include_once($view.'.php');
}   