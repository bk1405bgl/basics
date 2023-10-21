<?php
    echo '<a href="https://php.bk1405bgl.de">zurück</a><br>';
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
?>
    <h1><?= "Hello" ?></h1>
<?php
    $tags = ["HTML", "CSS", "JavaScript", "PHP"];
    foreach ($tags as $tag) {
        echo "$tag<br>";
    }