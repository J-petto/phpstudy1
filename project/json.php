<?php
$arr = ['apple' => "사과", 'banana' => "바나나"];
print_r($arr);

$str = json_encode($arr);
echo $str;

//배열을 제이슨 방법으로 인코딩 
// ㄴ> 자바스크립트에서 처리할 수 있는 파일이 된다.