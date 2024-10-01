<!-- 관리자만 게시판 삭제가능하도록 -->
<?php
include "define.php";

session_start();
if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
else $userlevel = "";

if ( $userlevel > 9 )
{
    echo("
        <script>
        alert('관리자가 아닙니다! 삭제는 관리자만 가능합니다!');
        history.go(-1)
        </script>
    ");
            exit;
}


    $num   = $_GET["num"];
    $page   = $_GET["page"];


    //삭제할 첨부 파일명 가져오기
    $con = mysqli_connect("localhost", DBuser, DBpass, DBname);
    $sql = "select * from board where num = $num";//$num을 이용해 해당 레코드 정보를 가져와 
    $result = mysqli_query($con, $sql); //$result에 저장
    $row = mysqli_fetch_array($result); 

    $copied_name = $row["file_copied"]; //첨부파일명을 구하여 $copied_name에 저장



    // 첨부파일 삭제
	if ($copied_name)
	{
		$file_path = "./data/".$copied_name;
		unlink($file_path); //서버에 저장된 첨부파일 삭제
    }

    //DB에서 해당 레코드 삭제
    $sql = "delete from board where num = $num";
    mysqli_query($con, $sql);
    mysqli_close($con);

    echo "
        <script>
        //페이지 이동
            location.href = 'together.php';
        </script>
    ";
?>