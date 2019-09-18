<?php
$code = "ch";

switch($code){
    case "ko" : 
        echo "안녕하세오";
        break;

    case "en" : 
        echo "hello";
        break;

    case "ja" : 
        echo "오하요";
        break;

    case "ch" : 
        echo "따자하오";
        break;
}

function ko(){
    echo "한국어";
}

function en(){
    echo "영어";
}

function ja(){
    echo "일본어";
}

function ch(){
    echo "중국어";
}