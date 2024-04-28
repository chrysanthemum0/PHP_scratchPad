<?php
// 폼이 제출되었는지 확인
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 입력된 연도 가져옴
    $year = $_POST["year"];

    // 윤년 계산
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        echo "<p>" . $year . "년은 윤년입니다. (1)</p>";
    } else {
        echo "<p>" . $year . "년은 윤년이 아닙니다. (0)</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>윤년 판별기</title>
</head>
<body>

<form method="post">
  <label for="year">연도:</label>
  <input type="number" id="year" name="year" min="1" max="4000" required>
  <input type="submit" value="판별">
</form>

</body>
</html>
