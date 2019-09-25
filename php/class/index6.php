<?php

class aaa{
    use asd;
}

trait asd{
    public function join(){
        echo "집 좀 보내주세요";
    }
}

$obj = new aaa;
$obj->join();