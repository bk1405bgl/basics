<?php
    echo "<a href='https://php.bk1405bgl.dev'>zurück</a><br>";
    echo "Hello World!";
    if (date("H") > 5 AND (date("H") <= 12)) {
        echo "<br>Guten Morgen!";
    } else if (date("H") > 12 AND (date("H") < 18)) {
        echo "<br>Guten Tag!";
    } else if (date("H") > 18 AND (date("H") < 23)) {
        echo "<br>Guten Abend!";
    } else {
        echo "<br>Gute Nacht!";
    }