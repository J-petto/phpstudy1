<?php
session_start();

$_SESSION["username"] = "황민지";

setcookie("mynum", "201840236", time()+(86400*30),"/");