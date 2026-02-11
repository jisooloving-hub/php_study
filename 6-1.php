<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while반복문으로 1부터 10합계 출력</title>
</head>
<body>
    <?php
    $sum=0;

    $i=1;
    while($i<=10){
        $sum += $i;
        $i++;
        
    }
    echo $sum;
    ?>
</body>
</html>