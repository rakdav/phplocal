<?php
    define("CONST_INT",1345);
    echo CONST_INT."<br>";
    $dyn_name="Dynamic_Constant";
    $dyn_val=145;
    define($dyn_name,$dyn_val);
    echo (constant($dyn_name));