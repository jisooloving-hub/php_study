<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>단일 값 입력란으로 구성된 회원 가입 양식</title>
</head>
<body>
    <form action="4-7.php" method="post">
        <table>
            <tr>
                <td>아이디</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr>
                <td>비밀번호</td>
                <td><input type="password" name="pw"></td>
            </tr>
            <tr>
                <td>성별</td>
                <td><input type="radio" name="gender" value="M" checked>남
                    <input type="radio" name="gender" value="F" >여
                </td>
            </tr>
            <tr>
                <td>가입경로</td>
                <td>
                    <select name="subs">
                        <option value="인터넷 검색" selected>인터넷 검색</option>
                        <option value="친지" >친지</option>
                        <option value="기타" >기타</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>주소지</td>
                <td>
                    <select name="addr" size="4">
                        <option value="서울" selected>서울</option>
                        <option value="경기" >경기</option>
                        <option value="인천" >인천</option>
                        <option value="기타" >기타</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>메모</td>
                <td>
                    <textarea name="memo" rows="4"></textarea> <!-- rows="4"는 텍스트가 5줄 이상이 되면 스크롤바가 생긴다. -->
                </td>
            </tr>
        </table>
        <input type="submit" value="가입">
    </form>
</body>
</html>