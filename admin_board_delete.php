<?php
    include "define.php";

    session_start();

    //회원 레벨 가져오기: 로그인한 사용자의 회원 레벨을 가져와 $userlevel에 저장
    if(isset($_SESSION["userlevel"]))
        $userlevel = $_SESSION["userlevel"];

    else $userlevel = "";

    //관리자가 아닌 경우 경고창 띄우기
    if($userlevel != 10)
    {
        echo("
            <script>
                alert('게시물 삭제는 ...저만 가능합니다');
                history.go(-1)
            </script>
        ");
        exit;
    }

    //체크박스 선택 여부 
    if(isset($_POST["item"]))
        $num_item = count($_POST["item"]);
        else
        echo("
            <script>
                alert('삭제할 게시글을 선택해 주세요!');
                history.go(-1)
            </script>
        ");

        $con = mysqli_connect("localhost", DBuser, DBpass, DBname);

        for($i=0; $i<count($_POST["item"]); $i++){
            $num = $_POST["item"][$i];

            //업로드된 첨부 파일을 가져오기
            $sql = "select * from board where num = $num";
            $result = mysqli_query($con, $sql);
            $row =  mysqli_fetch_array($result);

            $copied_name = $row["file_copied"];

            //첨부파일 삭제
            if($copied_name)
            {
                $file_path = "./data/".$copied_name;
                unlink($file_path);
            }


            //DB에서 게시글 삭제
            $sql = "delete from board where num = $num";
            mysqli_query($con, $sql);

        };
        mysqli_close($con); 

        echo"
        <script>
            //페이지이동
            location.href = 'admin.php';
        </script>
    "

?>