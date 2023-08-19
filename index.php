<?php
    echo "<a href='https://php.bk1405bgl.dev'>zurück</a><br>";
    echo "Hello World!";
    if (date("H") > 5 && (date("H") <= 12)) {
        echo "<br>Guten Morgen!";
    } else if (date("H") > 12 && (date("H") < 18)) {
        echo "<br>Guten Tag!";
    } else if (date("H") > 18 && (date("H") < 23)) {
        echo "<br>Guten Abend!";
    } else {
        echo "<br>Gute Nacht!";
    }
    echo "<br>";
    echo "<br>";
    $a = 5;
    $b = 3;
    $c = $a + $b;
    echo "a + b = " . $c;
    echo "<br>";
    echo "<br>";
    for ($i = 1; $i <=10; $i++) {
        echo $i . "<br>";
    }