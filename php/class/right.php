<?php
class right{

    public $name;

    function greeting(){
        echo "right hello" . $this->name . "<br>";
        return $this;
    }

    public function daelim(){
        echo "대림대학교 ";
        return $this;
    }

    public function foo(){
        echo "학생회이며 ";
        return $this;
    }

    public function bar(){
        echo "동아리 회장입니다.<br>";
    }
}
