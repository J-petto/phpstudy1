<?php

class daelim{
    public function __construct(){
        echo __CLASS__ . "이 생성 되었습니다.";
       //$this->hello();
    }

    public function hello(){
        echo "학교 좀 삭제해주세요";
    }
}

class food extends daelim{

    public function menu(){
        echo "맛이 없어요";
    }

    public function hello(){
        echo "학교 가까운데";
    }
}

$obj1 = new food;
$obj1->hello();
$obj1->menu();