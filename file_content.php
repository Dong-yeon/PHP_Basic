<?php
$data = "hi";
file_put_contents("data.txt", $data);

$load_data = file_get_contents('data.txt');

echo $load_data;