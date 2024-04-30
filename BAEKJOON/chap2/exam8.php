<?php


// KOI 전자에서는 건강에 좋고 맛있는 훈제오리구이 요리를 간편하게 만드는 인공지능 오븐을 개발하려고 한다. 
// 인공지능 오븐을 사용하는 방법은 적당한 양의 오리 훈제 재료를 인공지능 오븐에 넣으면 된다. 
// 그러면 인공지능 오븐은 오븐구이가 끝나는 시간을 분 단위로 자동적으로 계산한다.
// 또한, KOI 전자의 인공지능 오븐 앞면에는 사용자에게 훈제오리구이 요리가 끝나는 시각을 알려 주는 디지털 시계가 있다.
// 훈제오리구이를 시작하는 시각과 오븐구이를 하는 데 필요한 시간이 분단위로 주어졌을 때, 
// 오븐구이가 끝나는 시각을 계산하는 프로그램을 작성하시오.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 입력 값 가져오기
    $start_hour = $_POST["start_hour"];
    $start_minute = $_POST["start_minute"];
    $cooking_time = $_POST["cooking_time"];

    // 시작 시간과 요리 시간을 분으로 계산
    $start_time = $start_hour * 60 + $start_minute;
    $end_time = $start_time + $cooking_time;

    // 종료 시간을 시간과 분으로 변환
    $end_hour = floor($end_time / 60);
    $end_minute = $end_time % 60;

    // 출력
    echo "<h3>Cooking will finish at: " . sprintf("%02d:%02d", $end_hour, $end_minute) . "</h3>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oven Cooking Time</title>
</head>
<body>
    <h2>Oven Cooking Time Calculator</h2>
    <form action="" method="post">
        <label for="start_time">Starting Time (HH MM):</label><br>
        <input type="number" id="start_hour" name="start_hour" min="0" max="23" placeholder="Hour" required>
        <input type="number" id="start_minute" name="start_minute" min="0" max="59" placeholder="Minute" required><br>
        <label for="cooking_time">Cooking Time (minutes):</label><br>
        <input type="number" id="cooking_time" name="cooking_time" min="1" required><br>
        <input type="submit" value="Calculate">
    </form>
    
    <?php

    ?>
</body>
</html>

