<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>연관 배열에 담긴 사용자 정보 출력</title>
</head>
<body>
    <?php
    $user=[
        "id"=>"kim",
        "name"=>"김지수",
        "addr"=>"경기",
        "phone"=>"010-2222-9999"
    ];

    foreach($user as $key => $value){//인덱스와 아이템을 같이 출력
        echo "$key : $value<br>";//id가 $key가 되고 kim이 $value가 됨.
    } 
    echo "<br>";

    foreach ($user as $value) {//배열의 아이템만 출력
        echo "$value ";
    }
    ?>
</body>
</html>