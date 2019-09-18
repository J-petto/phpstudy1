<?php
function kor(){
    echo "안녕하세오";
}

function eng(){
    echo "hello";
}

$lang = "ko";

if($lang == "ko"){
    $fff = "kor";
}else{
    $fff = "eng";
}

$fff();