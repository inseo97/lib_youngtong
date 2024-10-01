<?php
include "define.php";

// 레코드 번호, 페이지 번호, 내용 전달받기
$num = $_GET["num"]; 
$page = $_GET["page"]; 

$subject = $_POST["subject"]; 
$content = $_POST["content"]; 

$con = mysqli_connect("localhost", DBuser, DBpass, DBname);

// 수정된 글 제목과 내용으로 DB업데이트
$sql = "UPDATE board SET subject='$subject', content='$content' WHERE num=$num";

if (mysqli_query($con, $sql)) {
    echo "
        <script>
        alert('수정이 완료되었습니다!');
        location.href = 'together.php';
        </script>
    ";
} else {
    echo "Error updating record: " . mysqli_error($con);
}

mysqli_close($con);     
?>