<?php

//   #10 switch文で条件分岐をしてみよう

//switch 条件分岐

$signal = "yellow";

switch ($signal){
    case "red":
        echo "stop";
        break;
    case "blue":
    case "green":
        echo "go!";
        break;
    case "yellow":
        echo "caution!";
        break;
    default:
        echo "wrong signal";
        break;
}