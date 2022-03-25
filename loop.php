<?php
$a = array(1,2,3,4,5);
foreach($a as $item)
{
    echo $item;
    echo "<br />";
}

echo "<br />";
$b = array('a'=>10, 'b'=>20, 'c'=> 'hi php');
foreach($b as $key=>$value)
{
    echo "$key => $value";
    echo "<br />";
}