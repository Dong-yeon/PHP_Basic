<?php
function hello_php()
{
    echo "hello php";
}

hello_php();
echo "<br />";

function nicetomeet($var)
{
    echo "nice to meet $var";
}

nicetomeet("you");
echo "<br />";

function add($a, $b)
{
    $result = $a + $b;
    return $result;
}

$result = add(1,2);
echo $result;
echo "<br />";

function defaultfunc($name='yes')
{
    echo "my name is $name";
}

defaultfunc();
echo "<br />";
defaultfunc('30min php');
echo "<br />";