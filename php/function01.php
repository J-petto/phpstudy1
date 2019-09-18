<?php

$name = "대림대";
echo "반가워요 " . $name . "\n";

if(!function_exists("hello")){
    function hello(){
        echo "반갑습니다";
    }
}

hello();