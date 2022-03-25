<?php
$data = array(1, 2, 3, 4);
$serial_data = serialize($data);
file_put_contents("data.txt", $serial_data);

$load_data = file_get_contents('data.txt');
$unserial_data = unserialize($load_data);

var_dump($load_data);
echo "<br />";
var_dump($unserial_data);