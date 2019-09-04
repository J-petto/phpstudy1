<?php

const NAME = "대림이";

echo NAME."좋아요";

define("TYPE", "대림대학교");
echo TYPE;

if(defined("NAME")){
    echo "상수 중복" .__LINE__;
} else {
    define("NAME", "대림대학교");
    echo NAME. "좋아요";
}