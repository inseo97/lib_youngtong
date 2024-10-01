<?php
    include "define.php";
	
    session_start();

    //회원 레벨 가져오기
    if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
    else $userlevel = "";

    //관리자가 아닌 경우 경고 창 띄우기

    if ( $userlevel < 10 )
    {
        echo("
            <script>
            alert('관리자가 아닙니다! 회원정보 수정은 관리자만 가능합니다!');
            history.go(-1)
            </script>
        ");
        exit;
    }

    //관리자 입력 데이터 가져오기

    $num   = $_GET["num"];
    $level = $_POST["level"]; 
    $point = $_POST["point"]; 

    //회원 정보 업데이트
   
    $con = mysqli_connect("localhost", DBuser, DBpass, DBname); // 데이터베이스에 연결


    $sql = "update members set level=$level, point=$point where num=$num";
    

    mysqli_query($con, $sql);
    
    mysqli_close($con);

    echo "
	     <script>
         //페이지 이동: DB 업데이트 작업을 종료하면 관리자 페이지인 admin.php로 이동.
	         location.href = 'admin.php';
	     </script>
	   ";
?>