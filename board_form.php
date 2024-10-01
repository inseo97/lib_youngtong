<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./css/reset.css">
    <link rel="stylesheet" type="text/css" href="./css/board.css">
    <script>
    function check_input() {
        if (!document.board_form.subject.value.trim()) {
            alert("제목을 입력하세요")
            document.board_form.subject.focus()
            return;
        }
        if (!document.board_form.content.value.trim()) {
            alert("내용을 입력하세요")
            document.board_form.content.focus()
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
        </div>
        <div class="modify_form" id="board_box">
            <h3 id="board_title">
                게시판 > 글쓰기
            </h3>
            <!-- 파일첨부 기능을 사용 할 때는 enctype 속성을 multipart/form-data로 설정 -->
            <form action="board_insert.php" method="post" name="board_form" enctype="multipart/form-data">
                <ul id="board_form">
                    <li>
                        <span class="col1">이름 : </span>
                        <span class="col2"><?=$username?></span>
                    </li>
                    <li>
                        <span class="col1">제목 : </span>
                        <span class="col2"><input type="text" name="subject"></span>
                    </li>
                    <li id="text_area">
                        <span class="col1">내용 : </span>
                        <span class="col2">
                            <textarea name="content"></textarea>
                        </span>
                    </li>
                    <li>
                        <span class="col1">첨부파일</span>
                        <span class="col2"><input type="file" name="upfile"></span>
                    </li>
                </ul>
                <ul class="buttons">
                    <li><button type="button" onclick="check_input()">완료</button></li>
                    <li><button type="button" onclick="location.href='together.php'">목록</button></li>
                </ul>
            </form>
        </div>
    </section>
    <footer id="footer_outer">
        <?php include "footer.php";?>
    </footer>
</body>

</html>