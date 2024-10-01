<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>수정하기</title>
    <link rel="stylesheet" type="text/css" href="./css/reset.css">
    <link rel="stylesheet" type="text/css" href="./css/board.css">

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- 5버전 -->
    <script defer src="https://use.fontawesome.com/releases/v5.15.3/js/all.js"></script>

    <!-- 6버전 -->
    <script src="https://kit.fontawesome.com/b51af6ee40.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="./js/jquery.easing.1.3.min.js"></script>
    <script type="text/javascript" src="./js/script1.js"></script>
    <script type="text/javascript" src="./js/script2.js"></script>
    <script type="text/javascript" src="./js/modernizr.js"></script>

    <script>
    function check_input() {
        if (!document.board_form.subject.value) {
            alert("제목을 입력하세요!");
            document.board_form.subject.focus();
            return;
        }
        if (!document.board_form.content.value) {
            alert("내용을 입력하세요!");
            document.board_form.content.focus();
            return;
        }
        document.board_form.submit();
    }
    </script>
</head>

<body>
    <header>
        <?php include "header.php";?>
    </header>
    <section>
        <div id="main_img_bar">
            <!-- <img src="./img/main_img.png"> -->
        </div>
        <div class="modify_form" id="board_box">
            <h3 id="board_title">
                수정하기
            </h3>
            <?php
	include "define.php";

  session_start();
    if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
    else $userlevel = "";

    if ( $userlevel > 9 )
    {
        echo("
            <script>
            alert('관리자가 아닙니다! 수정은 관리자만 가능합니다!');
            history.go(-1)
            </script>
        ");
                exit;
    }
?>
            <?php
	//글 내용보기 페이지(board_view.php)로 부터 레코드 번호와 페이지 번호 전달받기 
	$num  = $_GET["num"];
	$page = $_GET["page"];
	
	//DB에서 글 정보 가져오기.
	//board 테이블에서 글쓴이, 제목, 내용, 파일명 정보를 가져와 $name, $subject, $content, $file_name에 저장.
	$con = mysqli_connect("localhost", DBuser, DBpass, DBname);
	$sql = "select * from board where num=$num";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);
	$name       = $row["name"];
	$subject    = $row["subject"];
	$content    = $row["content"];		
	$file_name  = $row["file_name"];
?>
            <!--// 아래 action을 board_modify.php?num=... ?> 같이 입력하는 이유는 
      		// board_modify.php 파일에서 글 수정 폼 양식의 데이터를 전달받아 DB에 업데이트 한다는 의미 -->
            <form name="board_form" method="post" action="board_modify.php?num=<?=$num?>&page=<?=$page?>"
                enctype="multipart/form-data">
                <ul id="board_form">
                    <li>
                        <!-- 이름: 옆에 글쓴이 이름인 $name을 출력한다. -->
                        <span class="col1">이름 : </span>
                        <span class="col2"><?=$name?></span>
                    </li>
                    <li>
                        <!-- 입력창에 글제목 삽입(제목:옆의 입력창에 수정전 제목인 $subject를 삽입) -->
                        <span class="col1">제목 : </span>
                        <span class="col2"><input name="subject" type="text" value="<?=$subject?>"></span>
                    </li>
                    <li id="text_area">
                        <!--  // 내용 옆의 text_area에 수정 전 내용인 $content를 삽입 -->
                        <span class="col1">내용 : </span>
                        <span class="col2">
                            <textarea name="content"><?=$content?></textarea>
                        </span>
                    </li>
                    <li>
                        <!-- 첨부 파일명인 $file_name을 출력 -->
                        <span class="col1"> 첨부 파일 : </span>
                        <span class="col2"><?=$file_name?></span>
                    </li>
                </ul>
                <ul class="buttons">
                    <!-- 수정하기버튼:  -->
                    <!--// <수정하기> 버튼 삽입 : check_input()을 호출하여 데이터가 입력되었는지 검사하고 이상이 없으면,
					// action 속성에 설정된 board_modify.php로 이동하여 폼 양식에 입력된 데이터로 DB를 업데이트-->
                    <li><button type="button" onclick="check_input()">수정하기</button></li>
                    <li><button type="button" onclick="location.href='together.php'">목록</button></li>
                </ul>
            </form>
        </div> <!-- board_box -->
    </section>
    <footer id="footer_outer">
        <?php include "footer.php";?>
    </footer>
</body>

</html>