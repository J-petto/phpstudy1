<?php
echo "database";
phpinfo();

//서버정보
$host = "localhost";
$user = "root";
$passwd = "multi1004";
$database = "php";

//mysql 접속
$connect = mysqli_connect($host, $user, $passwd, $database);

if($connect)
    echo "DB 접속 성공";
else
    echo "DB 접속 불가";