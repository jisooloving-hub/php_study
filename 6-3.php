<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>break와 continue의 사용</title>
</head>
<body>
    <?php
    for ($a=1; $a<=4; $a++) {
        if($a==2)
            continue;
        if($a==3)
            break;
        echo $a;
    }
    ?>
</body>
</html>