<?php

$n = 5; 

for ($i = 1; $i <= $n; $i++) {
    // 공백 출력
    for ($k = 1; $k <= $n - $i; $k++) {
        echo '&nbsp;';
    }
    // 별 출력
    for ($j = 1; $j <= $i; $j++) {
        echo '*';
    }
    echo '<br>';
}

?>
