<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>윤년 판단 프로그램</title>
</head>
<body>
    <?php
    $y=$_REQUEST["year"];

    if(($y % 4 == 0 && $y % 100 !== 0) || ($y % 400 == 0))
        echo "{$y}년은 윤년입니다.";
    else
        echo "{$y}년은 윤년이 아닙니다.";
    ?>
</body>
</html>