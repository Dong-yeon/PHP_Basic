<?php
function require_scope(){
    require_once("inc_val.php");
    echo $inc_val;
}

require_scope();
require_scope();