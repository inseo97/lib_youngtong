<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>PHP 프로그래밍</title>
    <link rel="stylesheet" type="text/css" href="./css/reset.css">
    <link rel="stylesheet" type="text/css" href="./css/member.css">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="http://kakaomapapi.dothome.co.kr/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
    <!-- 5버전 -->
    <script defer src="https://use.fontawesome.com/releases/v5.15.3/js/all.js"></script>

    <!-- 6버전 -->
    <script src="https://kit.fontawesome.com/b51af6ee40.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./css/webfont.css">
    <link rel="stylesheet" href="./css/weather-icons.min.css">

    <link rel="stylesheet" href="./css/admin.css">
    <link rel="stylesheet" href="./css/board.css">
    <link rel="stylesheet" href="./css/members.css">



    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="./js/jquery.easing.1.3.min.js"></script>

    <script type="text/javascript" src="./js/script2.js"></script>
    <script type="text/javascript" src="./js/modernizr.js"></script>
    <script type="text/javascript" src="./js/member_modify.js"></script>

</head>

<body>
    <header>
        <?php include "header.php";?>
    </header>
    <?php    
   	$con = mysqli_connect("localhost", DBuser, DBpass, DBname); 

    $sql    = "select * from members where id='$userid'";
    $result = mysqli_query($con, $sql);
    $row    = mysqli_fetch_array($result);


    $pass = $row["pass"];
    $name = $row["name"];

    $email = explode("@", $row["email"]); 

    $email1 = $email[0];
    $email2 = $email[1];

    mysqli_close($con);
?>
    <section>
        <div id="main_img_bar">

        </div>
        <div id="main_content">
            <div id="join_box">

                <form name="member_form" method="post" action="member_modify.php?id=<?=$userid?>">

                    <h2>회원 정보수정</h2>
                    <div class="form id">
                        <div class="col1">아이디</div>
                        <div class="col2">
                            <?=$userid?>
                        </div>
                    </div>
                    <div class="clear"></div>

                    <div class="form">
                        <div class="col1">비밀번호</div>
                        <div class="col2">
                            <input type="password" name="pass" value="<?=$pass?>">

                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="form">
                        <div class="col1">비밀번호 확인</div>
                        <div class="col2">
                            <input type="password" name="pass_confirm" value="<?=$pass?>">
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="form">
                        <div class="col1">이름</div>
                        <div class="col2">
                            <input type="text" name="name" value="<?=$name?>">
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="form email">
                        <div class="col1">이메일</div>
                        <div class="col2">
                            <input type="text" name="email1" value="<?=$email1?>">@<input type="text" name="email2"
                                value="<?=$email2?>">
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="bottom_line"> </div>
                    <div class="buttons">
                        <button type="button" style="cursor:pointer" onclick="check_input()">
                            저장하기
                        </button>
                        &nbsp;
                        <button type="button" id="reset_button" style="cursor:pointer" onclick="reset_form()">
                            비우기
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <footer id="footer_outer">
        <?php include "footer.php";?>
    </footer>
</body>

</html>