<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>배열을 이용한 성적처리</title>
</head>
<body>
    <?php
    $score=[80,90,100,20,30];

    echo "점수 : ";
    $sum=0;
    for($i=0; $i<count($score); $i++){
        echo "$score[$i], ";
        $sum += $score[$i];
    }
    echo "<br>";

    $avg=$sum/count($score);

    echo "총점 : $sum<br>";
    echo "평균 : $avg";
    ?>    
</body>
</html>