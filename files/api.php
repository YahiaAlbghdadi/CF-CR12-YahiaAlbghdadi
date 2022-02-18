<?php
header('Content-Type: application/json; charset=utf-8');
require_once "../actions/aSearch.php";
function response($data){
    $result = json_encode($data);
    echo $result;
}

response($rows);?>

