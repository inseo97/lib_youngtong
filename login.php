<meta charset="utf-8">
<?php
    include "define.php";

    $id = $_POST["id"];
    $pass = $_POST["pass"];

    $con = mysqli_connect("localhost", DBuser, DBpass, DBname);
    $sql = "select * from members where id='$id'";

    $result = mysqli_query($con, $sql); //계정과 새로입력한 아이디값을 실행

    $num_match = mysqli_num_rows($result);

    if(!$num_match){ // 아이디 존재여부 판단
        echo("
            <script>
                window.alert('등록되지 않은 아이디입니다.')
                history.go(-1)
            </script>
        ");
    }
    else{ // 아이디가 존재하는 경우
        $row = mysqli_fetch_array($result); // db에서 비밀번호 가져오기
        $db_pass = $row['pass'];
        mysqli_close($con);
        if($pass != $db_pass) { //입력된 비밀번호와 db의 비밀번호 비교
            //비밀번호가 다른 경우 실행
            echo("
                <script>
                    window.alert('비밀번호가 틀립니다.')
                    history.go(-1)
                </script>
            ");
            exit;
        }
        else { //비밀번호가 같은 경우 세션 시작
            session_start();
            
            $_SESSION["userid"]=$row["id"];
            $_SESSION["username"]=$row["name"];
            $_SESSION["userlevel"]=$row["level"];
            $_SESSION["userpoint"]=$row["point"];

            echo("
            <script>
                location.href='index.php'
            </script>
            ");
        }

    }










?>