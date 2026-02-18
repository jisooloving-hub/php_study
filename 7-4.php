<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2차원 배열을 이용한 3학급 성적처리</title>
</head>
<body>
    <?php
    $score=[
        [80,90,100,20,30],
        [67,33,45,20,89],
        [0,80,31,72,12]
    ];

    for ($c=0; $c<count($score); $c++){
        echo $c+1, "반 점수 : ";

        $sum=0;
        for($i=0; $i<count($score[$c]); $i++){
            echo $score[$c][$i], ", ";
            $sum+=$score[$c][$i];
        }
        echo "<br>";
        $avg=$sum/count($score[$c]);
        echo "총점 : $sum<br>";
        echo "평균 : $avg<br>";
    }
    ?>
</body>
</html>