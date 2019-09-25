<?php

//Interface를 이용한 클래스 제작
interface greeting{
    public function hello();
}

class daelim implements greeting{
    public function hello(){
        echo "그냥 해...";
    }
}

$obj = new daelim;
$obj->hello();