<?php

//  #13 配列を使ってみよう
//  key value


// $sales = array(
//     "taguchi"       => 200,
//     "fkoji"         => 800,
//     "dotinstall"    => 600,
// );


// PHP 5.4以降
$sales = [
    "taguchi"       => 200,
    "fkoji"         => 800,
    "dotinstall"    => 600,
];

var_dump($sales["fkoji"]);      //800
$sales["fkoji"] = 900;
var_dump($sales["fkoji"]);      //900

$colors = ["red", "blue", "pink"];
var_dump($colors[1]);           //blue