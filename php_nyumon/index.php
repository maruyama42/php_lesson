<?php

// #26 名前空間を使ってみよう

require "User.class.php";

// use Dotinstall\Lib as Lib;
use Dotinstall\Lib;


$Bob = new Lib\User("Bob");
$Bob->sayHi();