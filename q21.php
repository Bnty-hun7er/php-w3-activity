<?php
function trinary_Test($n){
    $output = $n > 30
        ? "greater than 30"
        : ($n > 20
            ? "greater than 20"
            : ($n > 10
                ? "greater than 10"
                : "Input a number at least greater than 10!"));

    echo $n . " : " .  $output . "<br>";
}

trinary_Test(32);
trinary_Test(21);
trinary_Test(12);
trinary_Test(4);
?>
