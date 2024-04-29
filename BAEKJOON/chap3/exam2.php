<?php

$input = array(
    array(1, 1),
    array(2, 3),
    array(3, 4),
    array(9, 8),
    array(5, 2)
);

foreach ($input as $data) {
    $a = $data[0];
    $b = $data[1];
    $result = $a + $b;
    echo $result . "\n";
}

?>
