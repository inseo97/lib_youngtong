<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./css/reset.css">
    <link rel="stylesheet" type="text/css" href="./css/member.css">
    <style>

    </style>
</head>

<body>
    <h3>아이디 중복체크</h3>
    <p>
        <?php
           include "define.php";
        
           $id = $_GET["id"];

           if(!$id){
                echo("<li>아이디를 입력해 주세요.</li>");
           }
           else{
                $con = mysqli_connect("localhost", DBuser, DBpass, DBname);

                $sql = "select * from members where id = '$id'";

                $result = mysqli_query($con, $sql); /* members 테이블 검색 */

                $num_record = mysqli_num_rows($result); //총 레코드 수 반환

                if($num_record){ //값을 가지고 있다면
                    echo "<li>".$id."아이디는 중복됩니다.</li>";
                    echo "<li>다른 아이디를 사용해 주세요.</li>";
                }
                else{
                    echo "<li>".$id."아이디는 사용 가능합니다.</li>";
                }

                mysqli_close($con); //서버와 연결 끊기
           }

        ?>
    </p>
    <div id="close">
        <img src="./images/close.png" onclick="javascript:self.close()" alt="닫기버튼">
    </div>
</body>

</html>