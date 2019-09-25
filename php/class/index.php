<?php
/*
include "class_01.php";
include "class_02.php";
*/
//greeting();
include "autoload.php";

$obj1 = new left;

var_dump($obj1);
echo "<br>";
$obj1->greeting();
$obj1->daelim();

$proerty = "name";
//$obj1->name = "대림대"; //$는 안씀
echo $obj1->$proerty . " 입니다.<br>";
echo "영어 코드는 = " . $obj1::ENG . "<br>";

$obj2 = new right;
$obj2->name = "황민지";
$result = $obj2->greeting();
var_dump($result);
echo "<br>";

$obj2->daelim();
$result->daelim();
echo"<br>";

//메소드 체인
echo "---<br>";
$obj2->greeting()->daelim()->foo()->bar();

echo "---<br>";
echo foo::$aaa;
foo::hello();