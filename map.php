<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>영통도서관 이용안내</title>



    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- 5버전 -->
    <script defer src="https://use.fontawesome.com/releases/v5.15.3/js/all.js"></script>

    <!-- 6버전 -->
    <script src="https://kit.fontawesome.com/b51af6ee40.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/using.css">
    <link rel="stylesheet" href="./css/joinus.css">
    <link rel="stylesheet" href="./css/map.css">

    <link rel="stylesheet" href="./css/webfont.css">
    <link rel="stylesheet" href="./css/weather-icons.min.css">

    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="./js/jquery.easing.1.3.min.js"></script>
    <script type="text/javascript" src="./js/script1.js"></script>
    <script type="text/javascript" src="./js/script2.js"></script>
    <script type="text/javascript" src="./js/modernizr.js"></script>


    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <!-- 구글맵/유료 사용하도록 하는 기능. 구글맵 API할용하기 -->
    <script src="js/map.js"></script>
    <style>
    .root_daum_roughmap .wrap_btn_zoom .btn_zoom_in .img_zoom {
        background-position: -80px -5px;
    }

    .root_daum_roughmap .wrap_btn_zoom .btn_zoom_out .img_zoom {
        background-position: -80px -45px;
    }

    .root_daum_roughmap .wrap_btn_zoom .btn_zoom_reset .img_zoom {
        background-position: -80px -90px;
    }
    </style>

</head>

<body>
    <header>
        <?php include "./header.php" ?>
    </header>

    <section class="mapSec02">
        <aside>
            <div id="remote">
                <img src="./images/lnb_bg.png" alt="">
                <div class="lnbTitle">
                    <span>도서관 소개</span>
                </div>
                <div class="remote_wrap">
                    <ul id="lnb">
                        <li class="th2"><a href="./info.php" target='_self' class='link_2th'><span>연혁</span></a>
                        </li>
                        <li class="th2"><a href="#" target='_self' class='link_2th'><span>행정서비스현장</span></a>
                        </li>
                        <li class="th2"><a href="#" target='_self' class='link_2th'><span>조직도</span></a>
                        </li>
                        <li class="th2"><a href="#" target='_self' class='link_2th'><span>현황안내</span></a>
                        </li>
                        <li class="th2"><a href="#" target='_self' class='link_2th'><span>상징물</span></a>
                        </li>
                        <li class="th2"><a href="#" target='_self' class='link_2th_ov'><span>오시는길</span></a>
                        </li>
                        <li class="th2"><a href="#" target='_self' class='link_2th'><span>특화자료</span></a>
                        </li>
                    </ul>
        </aside>
        <article>
            <span class="fl content-Title">오시는길</span>
            <div id="location" class="title_wrap">

                <div class="utile_wrap">

                    <ul class="location_wrap">
                        <li class="navi_home"><a href="./index.php">Home</a></li>
                        <li><a href='#'>도서관 소개 </a></li>
                        <li class="last on"><a href="#toggle"> 오시는길 </a></li>

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


            <div class="wrap using_content">
                <div id="contents_bottom">
                    <!-- * 카카오맵 - 지도퍼가기 -->
                    <!-- 1. 지도 노드 -->
                    <div id="daumRoughmapContainer1718698375444"
                        class="root_daum_roughmap root_daum_roughmap_landing mapImg">
                    </div>

                    <!--
                    2. 설치 스크립트
                    * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
                -->
                    <script charset="UTF-8" class="daum_roughmap_loader_script"
                        src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

                    <!-- 3. 실행 스크립트 -->
                    <script charset="UTF-8">
                    new daum.roughmap.Lander({
                        "timestamp": "1718698375444",
                        "key": "2jpx4",
                        "mapWidth": "640",
                        "mapHeight": "360"
                    }).render();
                    </script>
                    <!-- id="contents_bottom" -->


                </div><!-- id="wrap" -->
                <div class="map_adrs">
                    <span>주소 및 전화번호 안내</span>
                    <p>우)16703 경기도 수원시 영통구 청명로 151(영통동) 영통도서관</p>
                    <ul>
                        <li>전화 : 031-228-4758</li>
                        <li>팩스 : 031-369-2053</li>
                    </ul>

                    <span>버스노선</span>
                    <ul>
                        <li>5번 : 영덕중학교 정류장 하차</li>
                        <li>720-1 : 수원가정법원.동수원등기소 정류장 하차</li>
                        <li>9, 98번 : 지역난방공사 신나무실쌍용아파트 정류장 하차</li>
                    </ul>
                    <a href="https://www.gbis.go.kr/gbis2014/schBus.action?mapTabCd=1">버스노선 검색 바로가기</a> <br>
                    <span>지하철노선</span>
                    <ul>
                        <li>분당선 청명역 4번출구 하차</li>
                        <li>분당선 영통역 8번출구 하차</li>
                    </ul>
                </div>
            </div>
        </article>
    </section>
    <!-- </section> -->
    <footer id="footer_outer">
        <?php include "./footer.php" ?>
    </footer>
</body>

</html>