<?php

$origin_pw = "123asdf";
$hash_pw = password_hash($origin_pw, PASSWORD_BCRYPT);

$match = password_verify($origin_pw, $hash_pw);
$not_match = password_verify($origin_pw . "zxcv", $hash_pw);

var_dump($origin_pw);
echo "<br />";
var_dump($hash_pw);
echo "<br />";
var_dump($match);
echo "<br />";
var_dump($not_match);
echo "<br />";