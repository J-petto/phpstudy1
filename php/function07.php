<?php
function re($i){
    echo $i--. "<br>";
    if($i>0)
        re($i);
}

re(5);