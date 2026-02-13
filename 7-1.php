<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>배열을 이용하지 않은 성적처리</title>
</head>
<body>
    <?php
    $s0=80;
    $s1=90;
    $s2=100;
    $s3=70;
    $s4=85;

    echo "점수 : $s0, $s1, $s2, $s3, $s4<br>";

    $sum=$s0+$s1+$s2+$s3+$s4;
    $avg=$sum/5;

    echo "총점 : $sum<br>";
    echo "평균 : $avg";
    ?>
</body>
</html>