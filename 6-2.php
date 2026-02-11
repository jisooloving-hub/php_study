<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for문으로 1부터 10합계 출력</title>
</head>
<body>
    <?php
    $sum=0;

    for($i=1; $i<=10; $i++) {
        $sum+=$i;
    }

    echo $sum;
    ?>
</body>
</html>