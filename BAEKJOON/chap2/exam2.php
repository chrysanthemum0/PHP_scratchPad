<?php

$score = 49; // 점수를 할당

if ($score >= 90) {
    echo "A";
} elseif ($score >= 70 && $score <= 89) {
    echo "B";
} elseif ($score >= 60 && $score <= 69) {
    echo "C";
} elseif ($score >= 50 && $score <= 59) {
    echo "D";
} else {
    echo "F";
}

?>
