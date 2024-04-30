<?php
// 주사위의 눈을 입력으로 받기
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dice = $_POST['dice'];

    // 눈을 배열로 변환
    $dice_array = explode(" ", $dice);

    // 눈의 개수 세기
    $counts = array_count_values($dice_array);

    // 가장 많이 나온 눈 찾기
    $max_count = max($counts);

    // 눈의 개수에 따라 상금 계산
    if ($max_count == 3) {
        // 같은 눈이 3개 나왔을 때
        $prize = 10000 + array_search(3, $counts) * 1000;
    } elseif ($max_count == 2) {
        // 같은 눈이 2개 나왔을 때
        $prize = 1000 + array_search(2, $counts) * 100;
    } else {
        // 모두 다른 눈이 나왔을 때
        $prize = max($dice_array) * 100;
    }

    // 상금 출력
    echo $prize;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dice Game</title>
</head>
<body>
    <form action="" method="post">
        <label for="dice">주사위 눈을 입력하세요 (예: 1 2 3):</label><br>
        <input type="text" id="dice" name="dice"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
