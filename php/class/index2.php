<?php
//선언
class foo{
    public $name;
    public static $daelim = "대림대학교";

    public function hello(){
        echo self::$daelim . ">>";
        echo $this->name . "입니다.<br>"; // 캑체 프러퍼티 값 저장
        return $this;
    }

    public function greeting(){
        echo "반갑습니다.<br>"; // 캑체 프러퍼티 값 저장
    }
}

//생성
$obj = new foo;
$obj->name = "대림대";
$obj->hello();

$obj2 = new foo;
$obj2->name ="계원예대";
$obj2->hello();

//정적은 클래스 선언이 바뀜
//두개가 다 우주최강으로 바꿈
foo::$daelim = "우주최강";
$obj->hello();
$obj2->hello();

/*
//호출
$result = $obj->hello(); //$this 
//$result == $this
$result->hello()->greeting();
echo"====<br>";
$obj2=new foo;

//
class bar{
    public $name;
    
    public static function username(){
        echo self::$name . "입니다.";
    }
}

bar::$name = "고정값";
bar::username();
*/