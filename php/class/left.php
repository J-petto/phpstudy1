<?php

    /**
     * 변수 + 함수 = 캡슐화
     * 함수 => 메소드
     * 변수 => 프로퍼티
     */

class left{
    public $name;

    const ENG = "en";

    public function greeting(){
        echo "hello";
    }

    function daelim(){
        echo "대림대학교";
    }
}
