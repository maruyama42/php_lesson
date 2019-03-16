<?php

//   #11 while文でループ処理をしてみよう

// while
// do ... while

$i = 100;

// while ($i < 10) {
//     echo ($i);
//     $i++;
// } 


do {
    echo $i;
    // $i = $i++;
    $i++;
} while ($i < 7);