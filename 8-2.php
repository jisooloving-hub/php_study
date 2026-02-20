<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>길이가 서로 다른 줄을 출력</title>
</head>
<body>
    <?php
    function title($n) {
        echo "* 계산 결과 출력<br>";
        
        for($i=0; $i<$n; $i++)
            echo "*";
        echo "<br>";
    }

    title(20);
    echo "첫 번째 계산 결과<br><br>";
    
    title(30);
    echo "두 번째 계산 결과<br><br>";

    title(40);
    echo "세 번째 계산 결과<br><br>";
    ?>
</body>
</html>