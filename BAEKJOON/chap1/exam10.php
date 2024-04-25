<?php 

$a = 472;  // 첫 번째 세 자리 수
$b = 385;  // 두 번째 세 자리 수

// 일의 자리
$result3 = $a * ($b % 10);

// 십의 자리
$result4 = $a * ((($b % 100) - ($b % 10)) / 10);

// 백의 자리
$result5 = $a * ($b / 100);

// 전체 결과
$result6 = $a * $b;

echo "일의 자리: " . $result3 . '<br>';
echo "십의 자리: " . $result4 . '<br>';
echo "백의 자리: " . floor($result5) . '<br>';
echo "전체 결과: " . $result6 . '<br>';

?>

