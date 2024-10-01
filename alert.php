<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>영통도서관 소식</title>



    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
    <!-- 5버전 -->
    <script defer src="https://use.fontawesome.com/releases/v5.15.3/js/all.js"></script>

    <!-- 6버전 -->
    <script src="https://kit.fontawesome.com/b51af6ee40.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/using.css">
    <link rel="stylesheet" href="./css/alert.css">


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
    <!-- <section class="useSec01">
        <p class="section_Title">도서관 소식</p>

    </section> -->
    <section>
        <aside>
            <div id="remote">
                <img src="./images/lnb_bg.png" alt="">
                <div class="lnbTitle">
                    <span>도서관 소식</span>
                </div>
                <div class="remote_wrap">
                    <ul id="lnb">
                        <li class="th2"><a href="#" target='_self' class='link_2th_ov'><span>공지사항</span></a>
                        </li>
                        <li class="th2"><a href="#" target='_self' class='link_2th'><span>공개자료실</span></a>
                        </li>
                    </ul>
        </aside>
        <article>
            <span class="fl content-Title">도서관 소식</span>
            <div id="location" class="title_wrap">

                <div class="utile_wrap">

                    <ul class="location_wrap">
                        <li class="navi_home"><a href="./index.php">Home</a></li>
                        <li><a href='#'>도서관 소식 </a></li>
                        <li class="last on"><a href="#toggle"> 공지사항 </a></li>

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

            <div class="board">

                <!--boardtop Start-->
                <div class="boardtop">
                    <p class="page_num">총 <span> 136</span>건 <span>1/14</span> 페이지</p>

                    <!--검색 Start-->
                    <div class="board_search">
                        <form name="sf" action="/yt/html/05_news/news01.asp">
                            <input type="hidden" value="list" name="process_type" title="process_type">

                            <fieldset>
                                <legend>게시물 검색</legend>
                                <label for="strSearch_div" class="skip">검색유형선택</label>
                                <select id="strSearch_div" name="keyword">
                                    <option value="">선택</option>
                                    <option value="b_lib" selected="">도서관</option>
                                    <option value="b_title">제목</option>
                                    <option value="b_text">내용</option>
                                </select>
                                <label for="strSearch_text" class="skip">검색어</label>
                                <input type="text" name="keyfield" class="inputText" id="strSearch_text" value="영통도서관">
                                <button type="submit" class="txt_button1">검색</button>
                            </fieldset>
                        </form>
                    </div>
                    <!--검색 End-->

                </div>
                <!--boardtop End-->
                <!-- 타이틀 기능 -->

                <table class="board_list">
                    <caption>
                        공지사항 게시물 목록이며 번호, 제목, 작성자, 날짜, 조회수 정보를 제공합니다.
                    </caption>
                    <colgroup>
                        <col class="num">
                        <col class="subject">
                        <col class="writer">
                        <col class="date3">
                        <col class="counter">
                    </colgroup>
                    <thead>
                        <tr>
                            <th scope="col" class="num">번호</th>
                            <th scope="col" class="subject">제목</th>
                            <th scope="col" class="writer">도서관</th>
                            <th scope="col" class="dated">날짜</th>
                            <th scope="col" class="counter">조회수</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="num"><span id="tag">공&nbsp;&nbsp;지</span></th>
                            <td class="subject">
                                <a href="#">수원시도서관 희망도서 바로대출 서비스 만족도 설문조사</a>
                            </td>
                            <td class="writer">수원시도서관</td>
                            <td class="dated">2024-06-10</td>
                            <td class="counter">2868</td>
                        </tr>

                        <tr>
                            <th class="num"><span id="tag">공&nbsp;&nbsp;지</span></th>
                            <td class="subject">
                                <a href="#">&lt;2024 수원시민 한 책 함께 읽기&gt; 독서챌린지 독서마라톤 안내</a>
                            </td>
                            <td class="writer">수원시도서관</td>
                            <td class="dated">2024-05-28</td>
                            <td class="counter">6200</td>
                        </tr>

                        <tr>
                            <th class="num"><span id="tag">공&nbsp;&nbsp;지</span></th>
                            <td class="subject">
                                <a href="#">선경도서관 전자저널 DBpia 서비스 운영안내</a>
                            </td>
                            <td class="writer">수원시도서관</td>
                            <td class="dated">2023-09-19</td>
                            <td class="counter">6559</td>
                        </tr>

                        <tr>
                            <th class="num"><span id="tag">공&nbsp;&nbsp;지</span></th>
                            <td class="subject">
                                <a href="#">수원시도서관 잡지 및 DVD자료 관외대출 서비스 안내</a>
                            </td>
                            <td class="writer">선경도서관</td>
                            <td class="dated">2023-09-15</td>
                            <td class="counter">68295</td>
                        </tr>

                        <tr>
                            <th class="num">136</th>
                            <td class="subject">
                                <a href="#">영통도서관 『독일(인)의 뿌리와 정체성을 찾아서』 참가자 모집</a>
                            </td>
                            <td class="writer">영통도서관</td>
                            <td class="dated">2024-06-17</td>
                            <td class="counter">135</td>
                        </tr>

                        <tr>
                            <th class="num">135</th>
                            <td class="subject">
                                <a href="#">영통도서관 6월 원화전시 안내</a>
                            </td>
                            <td class="writer">영통도서관</td>
                            <td class="dated">2024-06-16</td>
                            <td class="counter">194</td>
                        </tr>

                        <tr>
                            <th class="num">134</th>
                            <td class="subject">
                                <a href="#">영통도서관 &lt;도서관 속 클래식 음악회&gt; 접수 안내</a>
                            </td>
                            <td class="writer">영통도서관</td>
                            <td class="dated">2024-06-07</td>
                            <td class="counter">472</td>
                        </tr>

                        <tr>
                            <th class="num">133</th>
                            <td class="subject">
                                <a href="#">영통도서관 5월 원화전시 안내</a>
                            </td>
                            <td class="writer">영통도서관</td>
                            <td class="dated">2024-05-10</td>
                            <td class="counter">814</td>
                        </tr>

                        <tr>
                            <th class="num">132</th>
                            <td class="subject">
                                <a href="#">영통도서관 &lt;문학과 도시&gt; 참여자 모집</a>
                            </td>
                            <td class="writer">영통도서관</td>
                            <td class="dated">2024-05-09</td>
                            <td class="counter">904</td>
                        </tr>

                        <tr>
                            <th class="num">131</th>
                            <td class="subject">
                                <a href="#">광교푸른숲도서관 플리마켓 &lt;책숲마실&gt; 5월 참가자 모집</a>
                            </td>
                            <td class="writer">영통도서관</td>
                            <td class="dated">2024-05-08</td>
                            <td class="counter">889</td>
                        </tr>

                        <tr>
                            <th class="num">130</th>
                            <td class="subject">
                                <a href="#">영통도서관 &lt;다문화 가정을 위한 자녀 독서코칭&gt;</a>
                            </td>
                            <td class="writer">영통도서관</td>
                            <td class="dated">2024-04-30</td>
                            <td class="counter">1127</td>
                        </tr>

                        <tr>
                            <th class="num">129</th>
                            <td class="subject">
                                <a href="#">영통도서관 [영어 동화 여행] 참여자 모집</a>
                            </td>
                            <td class="writer">영통도서관</td>
                            <td class="dated">2024-04-09</td>
                            <td class="counter">1586</td>
                        </tr>

                        <tr>
                            <th class="num">128</th>
                            <td class="subject">
                                <a href="#">영통도서관『행복길라잡이 마로』참가자 모집</a>
                            </td>
                            <td class="writer">영통도서관</td>
                            <td class="dated">2024-03-31</td>
                            <td class="counter">1479</td>
                        </tr>

                        <tr>
                            <th class="num">127</th>
                            <td class="subject">
                                <a href="#">영통도서관 4월 원화전시 안내</a>
                            </td>
                            <td class="writer">영통도서관</td>
                            <td class="dated">2024-03-28</td>
                            <td class="counter">1038</td>
                        </tr>



                    </tbody>
                </table>




            </div>

        </article>

        <div class="board_navi">
            <a href="#" class="prev_end">
                <img src="./images/Asset 1.png" alt="처음페이지로">
            </a>&nbsp;<strong>1</strong>
            <a href="#"> 2 </a>
            <a href="#"> 3 </a>
            <a href="#"> 4 </a>
            <a href="#"> 5 </a>
            <a href="#"> 6 </a>
            <a href="#"> 7 </a>
            <a href="#"> 8 </a>
            <a href="#"> 9 </a>
            <a href="#"> 10 </a>
            <a href="#" class="prev_end">
                <img src="./images/Asset 2.png" alt="다음페이지로">
            </a>
            <a href="#" class="prev">
                <img src="./images/Asset 3.png" alt="마지막페이지로">
            </a>

        </div>
    </section>
    <footer id="footer_outer">
        <?php include "./footer.php" ?>
    </footer>
</body>

</html>