<?php
function valid_required($input)
{
    return is_array($input) ? empty($input) === False : trim($input) !== '';
}

function valid_required_get($key)
{
    return isset($_GEt[$key]) && valid_required($_GET[$key]);
}


var_dump(valid_required(""));
var_dump(valid_required(array()));
var_dump(valid_required("php"));
var_dump(valid_required(array(1)));

$is_valid_required = isset($_GET['param']) && valid_required($_GET['param']);