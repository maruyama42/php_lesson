<?php

// #25 外部ファイルを読み込んでみよう

// require      : fatal error
// require_once : すでに読み込まれていたらスキップ
// require "User.class.php";

// include      : warning
// include_once : すでに読み込まれていたらスキップ
// include "User.class.php";

// autoload     :
spl_autoload_register(function($class){
    require $class . ".class.php";
});



$Bob = new User("Bob");
$Bob->sayHi();