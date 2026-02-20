<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>함수를 사용하여 같은 내용 출력</title>
</head>
<body>
    <?php
    function title() {
        echo "* 계산 결과 출력<br>";
        echo "******************<br>";
    }

    title();
    echo "첫 번째 계산 결과<br><br>";
    
    title();
    echo "두 번째 계산 결과<br><br>";

    title();
    echo "세 번째 계산 결과<br><br>";
    ?>
</body>
</html>