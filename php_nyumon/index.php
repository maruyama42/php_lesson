<?php

//  #08 if文で条件分岐をしてみよう
// if 条件分岐
// 比較演算子　> < >= <= == === != !== 
// 論理演算子 and && , or || , not !

$score = 35;
if ($score > 80) {
    echo "great!";
} elseif ($score >60) {
    echo "good!";
} else {
    echo "so so ...";
}