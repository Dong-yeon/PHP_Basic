<?php
function string_splitlines($input)
{
    return explode(PHP_EOL, $input);
}

$data = <<<CDATA
안녕
하신가
요?
CDATA;

var_dump(string_splitlines($data));