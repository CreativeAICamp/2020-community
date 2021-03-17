<?php
function demo()
{
    $char=
    [
        "hahaha" =>1,
        "wawawa"=>1,
        "kakaka"=>1,
    ];
    $pick = array_rand($char);
    echo $pick;
}
echo "<pre>";
demo();
echo "</pre>";
?> 