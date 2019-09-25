<?php

include "function11.php";
//include "function11.php"; -> 중복 불가
list ($name, $num) = daelim("대림대학교", 201840236);
echo $name . " = " . $num;

/*
function daelim($name, $num){
    echo "대림대학교<br>";
    //echo $name . " = " . $num;
    $arr = [$name, $num];//$arr = array();
    return $arr;
}

$daelim = daelim("대림대학교", 201840236);
print $daelim;
--> Array 출력*/