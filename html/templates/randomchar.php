<?php
function demo()
{
    $color=
    [
        "yellow" =>30,
        "pink"=>70,
    ];
    $pick = array_rand($color);
    echo $pick;
    $pick = array_rand($color);
    echo $pick;
    $pick = array_rand($color);
    echo $pick;
}
echo "<pre>";
demo();
echo "</pre>";
?> 