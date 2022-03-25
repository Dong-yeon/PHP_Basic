<?php
$second = date('s');
echo $second;
if ($second % 3 == 0)
{
    echo " : 나머지가 0 임";
}
elseif ($second % 3 == 1)
{
    echo " : 나머지가 1 임";
}
else 
{
    echo " : 나머지가 2 임";
}