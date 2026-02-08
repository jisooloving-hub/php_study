<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>단일 선택 입력 값의 출력</title>
</head>
<body>
    아이디 : <?= $_REQUEST["id"] ?><br>
    비밀번호 : <?= $_REQUEST["pw"] ?><br>
    성별 : <?= $_REQUEST["gender"] ?><br>
    가입경로 : <?= $_REQUEST["subs"] ?><br>
    주소 : <?= $_REQUEST["addr"] ?><br>
    메모 : <?= $_REQUEST["memo"] ?><br>
</body>
</html>