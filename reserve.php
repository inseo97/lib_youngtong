<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>영통도서관 이용안내</title>



    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
    <!-- 5버전 -->
    <script defer src="https://use.fontawesome.com/releases/v5.15.3/js/all.js"></script>

    <!-- 6버전 -->
    <script src="https://kit.fontawesome.com/b51af6ee40.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/using.css">

    <link rel="stylesheet" href="./css/webfont.css">
    <link rel="stylesheet" href="./css/weather-icons.min.css">

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
                    <span>통합예약/신청</span>
                </div>
                <div class="remote_wrap">
                    <ul id="lnb">
                        <li class="th2"><a href="#" target='_self' class='link_2th_ov'><span>독서문화프로그램</span></a>
                        </li>
                        <li class="th2"><a href="#" target='_self' class='link_2th'><span>푸른숲책뜰</span></a>
                        </li>
                        <li class="th2"><a href="#" target='_self' class='link_2th'><span>도서관체험교실</span></a>
                        </li>
                        <li class="th2"><a href="#" target='_self' class='link_2th'><span>디지털자료실PC예약</span></a>
                        </li>
                        <li class="th2"><a href="#" target='_self' class='link_2th'><span>열람실좌석현황</span></a>
                        </li>
                        <li class="th2"><a href="#" target='_self' class='link_2th'><span>자원봉사신청</span></a>
                        </li>
                    </ul>
        </aside>
        <article>
            <span class="fl content-Title">독서문화프로그램</span>
            <div id="location" class="title_wrap">

                <div class="utile_wrap">

                    <ul class="location_wrap">
                        <li class="navi_home"><a href="./index.php">Home</a></li>
                        <li><a href='#'>통합예약/신청 </a></li>
                        <li class="last on"><a href="#toggle"> 독서문화프로그램 </a></li>

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





            <div class="using_content">
                <img class="fl" src="./images/clock3d.png" width="200" alt="시계">

            </div>
        </article>
    </section>
    <footer id="footer_outer">
        <?php include "./footer.php" ?>
    </footer>
</body>

</html>