<?php
// 폼이 제출되었는지 확인
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 입력된 시간과 분을 가져옴
    $H = $_POST["hour"];
    $M = $_POST["minute"];

    // 45분을 빼서 언제로 고쳐야 하는지 계산
    $M -= 45;

    // 만약 M이 음수라면 시간을 하나 줄이고, M을 양수로 변환
    if ($M < 0) {
        $H -= 1;
        $M += 60;
    }

    // 만약 시간이 음수라면 23으로 변환
    if ($H < 0) {
        $H = 23;
    }

    // 결과 출력
    echo "<p>알람 시간: " . $H . "시 " . $M . "분</p>";
}
?>

<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>알람 시간 계산</title>
</head>
<body>

<form method="post">
  <label for="hour">시간:</label>
  <input type="number" id="hour" name="hour" min="0" max="23" required><br>
  <label for="minute">분:</label>
  <input type="number" id="minute" name="minute" min="0" max="59" required><br>
  <input type="submit" value="알람 시간 계산">
</form>

</body>
</html>
