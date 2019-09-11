<?php
//$body = file_get_contents("for01.php");
//echo $body;

$filename = "for01.php";
$fp = fopen($filename, "r");
//r = 읽기용으로

$count = 0;
while(!feof($fp)){
    $doller = fgetc($fp);
    if($doller == "$") $count++;
}

fclose($fp);
echo"소스에 $ 기호가".$count."개가 있어요";