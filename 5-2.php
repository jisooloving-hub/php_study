<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>elseif를 사용한 학점 출력</title>
</head>
<body>
    <?php
    $score=$_REQUEST["score"];

    if($score>=90)
        echo "A학점입니다.";
    elseif($score>=80)
        echo "B학점입니다.";
    elseif($score>=70)
        echo "C학점입니다.";
    elseif($score>=60)
        echo "D학점입니다.";
    else
        echo "F학점입니다.";
    ?>
</body>
</html>