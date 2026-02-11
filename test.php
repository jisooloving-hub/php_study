<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>내가 해보고 싶어서 만든 파일</title>
</head>
<body>
    <?php
    $i=1; //*모양을 100번 출력
    while($i<=100){
        echo "*";
        $i++;
    }
    echo "<br>";
    $a=5; //숫자 5부터 10까지 출력
    while($a<=10){
        echo "$a";
        $a++;
    }
    echo "<br>";
    $g=1; //숫자 1부터 20까지 홀수만 출력
    while($g<=20){
        echo "$g";
        $g += 2;
    }
    echo "<br>";
    for ($i=1; $i<=10; $i++){
        if($i<=5)
            continue;
        echo "$i";
    } //678910만 출력
    ?>
</body>
</html>