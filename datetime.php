<?php
$date1 = date("Y-m-d H:i:s");
$date2 = new DateTime();
$date2_str = $date2->format("Y-m-d H:i:s");

var_dump($date1); echo "<br />";
var_dump($date2); echo "<br />";
var_dump($date2_str); echo "<br />";

$tommorw = $date2->add(new DateInterval("P1D"));
var_dump($tommorw); echo "<br />";
