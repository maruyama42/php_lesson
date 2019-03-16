<?php

// #14 foreachを使ってみよう
// key value
// for each


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

// foreach ($sales as $key => $value){
//     echo "($key) $value";
// }

$colors = ["red", "blue", "pink"];

// foreach ($colors as $value){
//     echo "$value ";
// }


//foreach if while for コロン構文
foreach ($colors as $value) :
    echo "$value ";
endforeach;

?>

<ul>
    <?php foreach ($colors as $value): ?>
    <li>
        <?php echo "$value"; ?>
    </li>
    <?php endforeach; ?>
</ul>