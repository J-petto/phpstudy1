<?php
include "hello10.php";
echo "반갑습니다.<br>";
include "hello10.php"; //오류가 나도 정상작동
require "hello12.php"; //오류가 나면 중단
require "./hello/hello12.php"; //경로 C:/php201840236/php/hello/hello12.php
require "../hello12.php"; //경로 C:/php201840236/php/hello/hello12.php