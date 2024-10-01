<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./css/reset.css">
    <link rel="stylesheet" type="text/css" href="./css/board.css">
    <link rel="stylesheet" href="./css/using.css">
    <link rel="stylesheet" href="./css/alert.css">

    <link rel="stylesheet" href="./css/webfont.css">
    <link rel="stylesheet" href="./css/weather-icons.min.css">


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
</head>

<body>
    <header>
        <?php include "./header.php" ?>
    </header>
    <section>
        <aside>
            <div id="remote">
                <img src="./images/lnb_bg.png" alt="">
                <div class="lnbTitle">
                    <span>참여마당</span>
                </div>
                <div class="remote_wrap">
                    <ul id="lnb">
                        <li class="th2"><a href="#" target='_self' class='link_2th_ov'><span>도서관에물어보세요</span></a>
                        </li>
                        <li class="th2"><a href="#" target='_self' class='link_2th'><span>동아리커뮤니티</span></a>
                        </li>
                        <li class="th2"><a href="#" target='_self' class='link_2th'><span>칭찬합니다</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
        <article>
            <?php
                $num =  $_GET["num"];
                $page = $_GET["page"];
                //DB에서 해당 글 검색하여 글 정보 가져오기
                $con = mysqli_connect("localhost", DBuser, DBpass, DBname);
				$sql = "select * from board where num=$num";
				$result = mysqli_query($con, $sql);

                //$result에서 데이터 가져오기
                $row = mysqli_fetch_array($result);
                $id = $row["id"];
                $regist_day = $row["regist_day"];
                $subject = $row["subject"];
                $content = $row["content"];
                $file_name = $row["file_name"];
                $file_type = $row["file_type"];
                $file_copied = $row["file_copied"];
                $hit = $row["hit"];
                
                //공백과 줄 바꿈 코드 변경
                $content = str_replace(" ","&nbsp;",$content);
                $content = str_replace("\n","<br>",$content);

                //조회수 값 증가와 DB에 업데이트
                $new_hit=$hit + 1;
                $sql = "update board set hit=$new_hit where num=$num";
                mysqli_query($con, $sql);
            ?>
            <div id="location" class="title_wrap">
                <span class="fl content-Title">제목 : <?=$subject?></span>

                <div class="utile_wrap">

                    <ul class="location_wrap">
                        <li class="navi_home"><a href="./index.php">Home</a></li>
                        <li><a href='#'>참여마당</a></li>
                        <li><a href='#'>도서관에 물어보세요</a></li>
                        <li class="last on"><a href="#toggle"> 내용보기 </a></li>

                    </ul>

                    <ul class="print_wrap setting-box__group">
                        <li id="sns_layout" class="n2 sns">
                            <button data-target="ui-open" class="ir-tmpl">SNS공유</button>
                            <div class="sns_wrap" data-id="ui-open">
                                <button data-target="ui-close" class="sns-close">닫기</button>
                                <button class="fa ir-tmpl" data-button="sns_share" data-service="facebook"
                                    data-title="페이스북 SNS공유" title="페이스북 공유하기, 새창열림">페이스북</button>
                                <button class="tw ir-tmpl" data-button="sns_share" data-service="twitter"
                                    data-title="트위터 SNS공유" title="트위터 공유하기, 새창열림">트위터</button>
                            </div>
                        </li>
                        <!-- <li class="n3 copy"><button onclick="CopyUrl(); return false;" class="copy ir-tmpl">복사하기</button></li> -->
                        <li class="n1 print" id="print"><button data-print="print" class="ir-tmpl">프린트</button></li>
                    </ul>
                </div>
            </div>
        </article>
        <div id="board_box">

            <ul id="view_content">
                <li>
                    <!-- 제목, 글쓴이, 작성일시 -->
                    <!-- <span class="col1">제목 : <?=$subject?></span> -->
                    <span class="col2"><?=$name?><?=$regist_day?></span>
                </li>
                <li>
                    <?php
                        if($file_name){ //첨부파일 정보출력
                            $real_name = $file_copied;
                            $file_path = "./data/".$real_name;
                            $file_size = filesize($file_path);

                            echo "첨부파일 : $file_name($file_size Byte) &nbsp;&nbsp;&nbsp;&nbsp;
                            <a href='download.php?num=$num&$real_name&file_name=$file_name&file_type=$file_type'>[저장]</a><br><br>";
                        }
                    ?>
                    <?= $content ?>

                </li>
            </ul>
            <ul class="buttons">
                <li>
                    <button onclick="location.href='together.php?page=<?=$page?>'">목록</button>
                </li>
                <li>
                    <button onclick="location.href='board_modify_form.php?num=<?=$num?>&page<?=$page?>'">수정</button>
                </li>
                <li>
                    <button onclick="location.href='board_delete.php?num=<?=$num?>&page<?=$page?>'">삭제</button>
                </li>
                <li>
                    <button onclick="location.href='board_form.php'">글쓰기</button>
                </li>
            </ul>
        </div>
    </section>
    <footer id="footer_outer">
        <?php include "./footer.php" ?>
    </footer>
</body>

</html>