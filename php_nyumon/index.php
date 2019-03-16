<?php

//    #12 for文でループ処理をしてみよう

// while
// do ... while
// for

// break        :ループを抜ける
// continue     :それ以降の処理を実行せずに次のループに移る


// $i = 100;

// while ($i < 10) {
//     echo ($i);
//     $i++;
// } 


// do {
//     echo $i;
//     // $i = $i++;
//     $i++;
// } while ($i < 7);


for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        // break;
        continue;
    }
    echo $i;
}