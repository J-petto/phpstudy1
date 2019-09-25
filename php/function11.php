<?php

if(function_exists("daelim")){
    echo "함수명이 존재합니다.";
}else{
    function daelim($name, $num) : array{
        echo "대림대학교<br>";
        //echo $name . " = " . $num;
        $arr = [$name, $num];//$arr = array();
        return $arr;
    }
}



