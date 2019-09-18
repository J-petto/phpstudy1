<?php
function hello($name = "**", int $a, int $b):int
{
    
    $sum = $a + $b;
    echo "반갑습니다 " . $name . " = " . $sum . "<br>";
    return $sum;
}

$user = "대림대학교";
$s = hello($user, '1', "2");
echo "합계 = " . $s;