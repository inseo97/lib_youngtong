<section id="sec1">
    <h2>글로벌리더의 중심 영통도서관</h2>
    <form action="#" id="search">
        <h2>자료검색</h2>
        <input type="search" placeholder="검색어를 입력하세요.">
        <input type="button" id="searchBtn" value="검색">
    </form>
    <article>
        <div id="calBn">
            <ul class="calTime">
                <li><span>도서관 운영시간</span></li>

                <li>
                    <script>
                    var current = new Date(); //내장 메서드.
                    var day_time = current.getHours()
                    if (day_time < 9) document.write("<h3 style='color:#ff4848'>운영중이 아닙니다.</h3>");
                    else if (day_time < 18) document.write("<h3 style='color:#3E85EF'>운영중입니다.</h3>");
                    else document.write("<h3 style='color:#ff4848'>운영중이 아닙니다.</h3>");
                    </script>
                    <script>
                    var current = new Date(); //내장 메서드.
                    var hours = current.getHours();
                    var minutes = current.getMinutes();
                    var ampm = current.getHours() >= 12 ? "오후" : "오전";
                    var timeHours;
                    if (hours >= 13) {
                        timeHours = hours - 12;
                    } else if (hours == 0) {
                        timeHours = 12;
                    } else {
                        timeHours = hours;
                    }

                    /* hours = 7; // 확인용 */
                    document.write("<h4> 현재 시각" + ampm + " " + timeHours + "시 " + minutes + "분</h4>");
                    </script>
                    <p>오전 9시 open - 오후 6시 close</p>
                    <p>* 주말 및 공휴일은 휴일입니다</p>

                </li>

            </ul>
            <div class="calendarWrap">
                <table class="Calendar">
                    <thead>
                        <tr>
                            <td onClick="prevCalendar();" style="cursor:pointer;"><i
                                    class="fa-solid fa-chevron-left"></i></td>
                            <td colspan="5">
                                <span id="calYear"></span>년
                                <span id="calMonth"></span>월
                            </td>
                            <td onClick="nextCalendar();" style="cursor:pointer;"><i
                                    class="fa-solid fa-chevron-right"></i></td>
                        </tr>
                        <tr onClick="buildCalendar();;" style="cursor:pointer;">
                            <td>일</td>
                            <td>월</td>
                            <td>화</td>
                            <td>수</td>
                            <td>목</td>
                            <td>금</td>
                            <td>토</td>
                        </tr>
                    </thead>

                    <tbody>
                    </tbody>
                </table>
            </div>

        </div>
        <div id="infoBn">
            <p>도서관 소식</p>
            <p>도서관의 다양한 소식을 알려드립니다</p>
            <div class="btnImg">
                <button class="prev fr"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                        <defs>
                            <style>
                            .cls-1 {
                                fill: none;
                            }
                            </style>
                        </defs>
                        <title />
                        <g data-name="Layer 2" id="Layer_1">
                            <path
                                d="M12,25a1,1,0,0,1-.71-.29,1,1,0,0,1,0-1.42L18.59,16l-7.3-7.29a1,1,0,1,1,1.42-1.42l8,8a1,1,0,0,1,0,1.42l-8,8A1,1,0,0,1,12,25Z" />
                        </g>
                        <g id="frame1">
                            <rect class="cls-1" height="32" width="32" />
                        </g>
                    </svg></button>
                <button class="next fr"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                        <defs>
                            <style>
                            .cls-1 {
                                fill: none;
                            }
                            </style>
                        </defs>
                        <title />
                        <g data-name="Layer 2" id="Layer_0">
                            <path
                                d="M12,25a1,1,0,0,1-.71-.29,1,1,0,0,1,0-1.42L18.59,16l-7.3-7.29a1,1,0,1,1,1.42-1.42l8,8a1,1,0,0,1,0,1.42l-8,8A1,1,0,0,1,12,25Z" />
                        </g>
                        <g id="frame2">
                            <rect class="cls-1" height="32" width="32" />
                        </g>
                    </svg></button>
            </div>

            <div id="brandVisual">
                <ul>
                    <li class="visual_0"><a href="#">배너이미지1</a></li>
                    <li class="visual_1"><a href="#">배너이미지2</a></li>
                    <li class="visual_2"><a href="#">배너이미지3</a></li>
                </ul>
            </div>



        </div>
    </article>
</section>
<section id="sec2">
    <article id="noticeBn" class="article1-1">
        <h3>도서관 소식</h3>
        <p>도서관의 다양한 소식을 알려드립니다</p>
        <div class="tabs">
            <input checked id="one" name="tabs" type="radio" />
            <label for="one">공지사항</label>

            <input id="two" name="tabs" type="radio" value="Two" />
            <label for="two">전체공지</label>

            <p id="plus">+</p>

            <div class="pannels">
                <ul class="panel" id="panel1-1">
                    <li>
                        <ul>
                            <li>영통도서관 5월 원화전시 안내</li>
                            <li>2024.5.1(수)~ 5.2(금) 영통도서관 1층 어린이 자료실에서 전시합니다.</li>
                            <li>영통도서관</li>
                            <li>2024-05-10</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li>영통도서관 &lt;문학과 도시&gt; 참여자 모집</li>
                            <li>본 강좌는 수원시 영통도서관과 한국외국어대학교 국제지역 연구센터 똘레랑스가 협력하여 진행하는 프로그램입니다.본 강좌는 수원시 영통도서관과
                                한국외국어대학교 국제지역 연구센터 똘레랑스가 협력하여 진행하는 프로그램입니다.본 강좌는 수원시 영통도서관과 한국외국어대학교 국제지역 연구센터 똘레랑스가
                                협력하여 진행하는 프로그램입니다.본 강좌는 수원시 영통도서관과 한국외국어대학교 국제지역 연구센터 똘레랑스가 협력하여 진행하는 프로그램입니다.</li>
                            <li>영통도서관</li>
                            <li>2024-05-09</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li>광교푸른숲도서관 플리마켓 &lt;책숲마실&gt; 5월 참가자 모집</li>
                            <li>광교푸른숲도서관 플리마켓 &lt;책숲마실&gt; 교환판매부스 참가자 모집
                                * 2024.05.18.(토) 11:00 ~ 16:00
                                * 광교푸른숲도서관 3층 테라스
                                * 인터넷,전화,방문
                            </li>
                            <li>영통도서관</li>
                            <li>2024-05-08</li>
                        </ul>
                    </li>

                </ul>
                <ul class="panel" id="panel1-2">
                    <li>
                        <ul>
                            <li>&lt;2024 수원시 올해의 책 선포식 & 북 콘서트&gt; 안내</li>
                            <li>&lt;2024 수원시민 한 책 함께 읽기 : 수원 독서 플레이그라운드&gt; 안내

                                1. 일 시 : 2024. 6. 8.(토) 10:00 ~ 17:00

                                2. 장 소 : 선경도서관 강당, 로비, 앞마당

                                3. 대 상 : 수원시민

                                4. 주요내용
                                - 2024 수원시 올해의 책 선포식 및 북 콘서트(곽재식 작가 강연)
                                - 플리마켓, 문화직거래 장터
                                - 체험행사, 도서관 밖 도서관(독서캠프), 전시 등

                                5. 접수 프로그램 안내

                                o 선포식 및 북 콘서트
                                - 일시 : 6. 8.(토) 10:00 ~ 12:00
                                - 장소 : 선경도서관 강당
                                - 대상 : 청소년~ 성인 150명

                                o 플리마켓(중고도서 및 물품 판매)
                                - 일시 : 6. 8.(토) 10:00 ~ 17:00
                                - 장소 : 선경도서관 앞마당
                                - 대상 : 수원시민 가족 4팀
                                - 지원 : 1,800 *750mm 테이블 1개+ 의자 2개 제공, 캐노피 천막 3*6m 천막에 4개 팀 들어갑니다.
                                - 중고도서 및 중고물품, 옷 등 판매
                                * 우천 시에도 진행가능하고 10:00 ~ 17:00까지 진행하실 수 있는 가족만 신청 부탁드려요^^

                                o 도서관 밖 도서관(독서캠프)
                                - 일시 : 6. 8.(토) 10:00 ~ 17:00
                                - 장소 : 선경도서관 앞마당
                                - 대상 : 수원시민 가족 18팀
                                * 10시-12시 : 6팀, 12시-14시:6팀, 14시-16시:6팀(시작시간 후 5분 기다려드리고 안오시면 취소)
                                * 원활한 진행을 위해 꼭 오실 분들만 신청 부탁드립니다.
                                - 지원 : 앞마당에 인디언텐트 및 책꾸러미(올해의 책, 보드게임 등) 대여

                                o 접수기간 : 2024. 5. 14.(화) 10:00 ~

                                o 접수방법 : 수원시도서관 홈페이지 독서문화프로그램에서 접수

                                6. 문의 : 031-228-4803</li>
                            <li>수원시도서관</li>
                            <li>2024-04-30</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li>2024 수원시 올해의 책 선정 안내</li>
                            <li>2024 수원시 올해의 책을 선정하여
                                한 해동안 올해의 책 선포식, 북 콘서트, 북 페스티벌, 작가 강연, 연계 프로그램 운영, 공연 등을 운영할 예정입니다.

                                시민 여러분의 많은 참여 부탁드립니다.
                                (행사 관련 접수 정보는 곧 업데이트 할 예정이니, 조금만 기다려주세요)

                                감사합니다.

                                &lt;2024 수원시 올해의 책&gt;
                                - 수원의 책
                                1. 수원을 걷는 건, 화성을 걷는 것이다 / 김남일
                                - 일반도서
                                1. 지구는 괜찮아, 우리가 문제지 / 곽재식
                                2. 순례주택 / 유은실
                                -어린이도서
                                1. 왼손에게 / 한지원
                                2. 고양이가 필요해/ 박상기, 이지오
                            </li>
                            <li>수원시도서관</li>
                            <li>2024-04-26</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li>수원시도서관 잡지 및 DVD자료 관외대출 서비스 안내</li>
                            <li>수원시도서관 잡지 및 DVD자료 관외대출 서비스 안내 서비스개시일 : 2023.10.04(수)
                                대출권수 정회원 1인 1개관 당 잡지3권 / DVD 3점
                            </li>
                            <li>선경도서관</li>
                            <li>2023-09-15</li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>

    </article>
    <article class="article1-2">
        <h3>도서관 영상</h3>
        <p>도서관의 다양한 소식을 영상으로</p>
        <a href="https://www.facebook.com/suwonlib" target="_blank">수원시도서관 페이스북 바로가기 ></a>
        <div id="noticePopup">
            <iframe
                src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fsuwonlib%2Fvideos%2F586929116838542%2F&show_text=false&width=560&t=0"
                width="355" height="200" style="border:none;overflow:hidden"
                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        </div>
    </article>
</section>
<section id="sec3">
    <article>
        <p>문화행사프로그램</p>
        <img src="./images/lib.jpg" alt="행사프로그램 포스터">
    </article>
    <article>
        <p>프로그램 접수현황</p>
        <ul>
            <li>
                <h4>접수중</h4>
                <p>드림캐쳐 만들기_4월 도서관주간</p>
                <p>2024.05.10~2024.05.20</p>
            </li>
            <li>
                <h4>접수완료</h4>
                <p>그림으로 보는 역사이야기</p>
                <p>2024.05.04~2024.05.06</p>
            </li>
            <li>
                <h4>접수완료</h4>
                <p>애착형성 돕는 힐링독서</p>
                <p>2024.04.04~2024.04.21</p>
            </li>
        </ul>
    </article>
    <article>
        <p>운영시간</p>
        <ul class="calTime">
            <li>
                <script>
                var current = new Date(); //내장 메서드.
                var day_time = current.getHours()
                if (day_time < 9) document.write("<h3 style='color:#ff4848'>영통 도서관 운영중이 아닙니다.</h3><br>");
                else if (day_time < 18) document.write("<h3 style='color:#3E85EF'>영통 도서관 운영중입니다.</h3><br>");
                else document.write("<h3 style='color:#ff4848'>영통 도서관 운영중이 아닙니다.</h3><br>");
                </script>
                <script>
                var current = new Date(); //내장 메서드.
                var hours = current.getHours();
                var minutes = current.getMinutes();
                var ampm = current.getHours() >= 12 ? "오후" : "오전";
                var timeHours;
                if (hours >= 13) {
                    timeHours = hours - 12;
                } else if (hours == 0) {
                    timeHours = 12;
                } else {
                    timeHours = hours;
                }

                /* hours = 7; // 확인용 */
                document.write("<h4> 현재 시각" + ampm + " " + timeHours + "시 " + minutes + "분</h4><br><br><br>");
                </script>
                <p>오전 9시 open - 오후 6시 close</p>
                <p>* 주말 및 공휴일은 휴일입니다</p>

            </li>

        </ul>
    </article>
</section>
<section id="sec4">
    <p>자주찾는 메뉴</p>
    <button class="prev1_1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
            <defs>
                <style>
                .cls-1 {
                    fill: none;
                }
                </style>
            </defs>
            <title />
            <g data-name="Layer 2" id="Layer_3">
                <path
                    d="M12,25a1,1,0,0,1-.71-.29,1,1,0,0,1,0-1.42L18.59,16l-7.3-7.29a1,1,0,1,1,1.42-1.42l8,8a1,1,0,0,1,0,1.42l-8,8A1,1,0,0,1,12,25Z" />
            </g>
            <g id="frame3">
                <rect class="cls-1" height="32" width="32" />
            </g>
        </svg></button>
    <div id="menuWrap">
        <ul>
            <li><a href="#">전자책 오디오북</a></li>
            <li><a href="#">도서관 매거진</a></li>
            <li><a href="#">경기도 도서관</a></li>
            <li><a href="#">책나루 무인 도서관</a></li>
            <li><a href="#">자원봉사 신청</a></li>
            <li><a href="#">열람실 좌석현황</a></li>
            <li><a href="#">전자책 오디오북</a></li>
            <li><a href="#">도서관 매거진</a></li>
            <li><a href="#">경기도 도서관</a></li>
            <li><a href="#">책나루 무인 도서관</a></li>
            <li><a href="#">자원봉사 신청</a></li>
            <li><a href="#">열람실 좌석현황</a></li>
        </ul>
    </div>
    <button class="next1_1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
            <defs>
                <style>
                .cls-1 {
                    fill: none;
                }
                </style>
            </defs>
            <title />
            <g data-name="Layer 2" id="Layer_4">
                <path
                    d="M12,25a1,1,0,0,1-.71-.29,1,1,0,0,1,0-1.42L18.59,16l-7.3-7.29a1,1,0,1,1,1.42-1.42l8,8a1,1,0,0,1,0,1.42l-8,8A1,1,0,0,1,12,25Z" />
            </g>
            <g id="frame4">
                <rect class="cls-1" height="32" width="32" />
            </g>
        </svg></button>
</section>
<section id="sec5">
    <h2>영통도서관 도서안내</h2>
    <article class="bk">
        <div id="bannerWrap">
            <ul class="bookMenu">
                <li><a href="#bookMenu1" class="on">신간도서(일반)&gt;</a></li>
                <li><a href="#bookMenu2">신간도서(아동)&gt;</a></li>
            </ul>
            <button class="prev1_2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                    <defs>
                        <style>
                        .cls-1 {
                            fill: none;
                        }
                        </style>
                    </defs>
                    <title />
                    <g data-name="Layer 2" id="Layer_5">
                        <path
                            d="M12,25a1,1,0,0,1-.71-.29,1,1,0,0,1,0-1.42L18.59,16l-7.3-7.29a1,1,0,1,1,1.42-1.42l8,8a1,1,0,0,1,0,1.42l-8,8A1,1,0,0,1,12,25Z" />
                    </g>
                    <g id="frame5">
                        <rect class="cls-1" height="32" width="32" />
                    </g>
                </svg></button>
            <div class="frame fl" id="bookMenu1">
                <ul id="banner" style="display: block;">
                    <li>
                        <a href="#" class="bkImg" id="bk1">
                            <img src="./images/bk01.jpg" alt="">
                        </a>

                        <span>돈의 속성</span>
                        <span>김승호 · 스노우폭스북스</span>
                    </li>
                    <li>
                        <a href="#" class="bkImg" id="bk2">
                            <img src="./images/bk02.jpg" alt="">
                        </a>

                        <span>불변의 법칙</span>
                        <span>모건 하우절 · 서삼독</span>
                    </li>
                    <li>
                        <a href="#" class="bkImg" id="bk3">
                            <img src="./images/bk03.jpg" alt="">
                        </a>

                        <span>빨모샘의 라이브 영어회화</span>
                        <span>신용하 · 웅진지식하우스</span>
                    </li>
                    <li>
                        <a href="#" class="bkImg" id="bk4">
                            <img src="./images/bk04.jpg" alt="">
                        </a>

                        <span>나를 소모하지 않는 현명한 태도에 관하여</span>
                        <span>마티아스 뇔케 · 퍼스트펭귄</span>
                    </li>
                    <li>
                        <a href="#" class="bkImg" id="bk5">
                            <img src="./images/bk05.jpg" alt="">
                        </a>
                        <span>부자의 마지막 가르침</span>
                        <span>다우치 마나부 · 북모먼트</span>
                    </li>
                    <li>
                        <a href="#" class="bkImg" id="bk6">
                            <img src="./images/bk06.jpg" alt="">
                        </a>
                        <span>부자의 마지막 가르침</span>
                        <span>다우치 마나부 · 북모먼트</span>
                    </li>
                </ul>
            </div>
            <div class="frame fl" id="bookMenu2">
                <ul id="banner2" style="display: block;">
                    <li>
                        <a href="#" class="bkImg" id="bk11">
                            <img src="./images/bk11.jpg" alt="">
                        </a>

                        <span>꿈꾸지 않아도 반짝이는 중</span>
                        <span>꿈꾸지 않아도 반짝이는 중</span>
                    </li>
                    <li>
                        <a href="#" class="bkImg" id="bk12">
                            <img src="./images/bk12.jpg" alt="">
                        </a>

                        <span>동물 농장 사운드북</span>
                        <span>동물 농장 사운드북</span>
                    </li>
                    <li>
                        <a href="#" class="bkImg" id="bk13">
                            <img src="./images/bk13.jpg" alt="">
                        </a>

                        <span>동물 오케스트라</span>
                        <span>동물 오케스트라</span>
                    </li>
                    <li>
                        <a href="#" class="bkImg" id="bk14">
                            <img src="./images/bk14.jpg" alt="">
                        </a>

                        <span>시원한 바닷가 사운드북</span>
                        <span>시원한 바닷가 사운드북</span>
                    </li>
                    <li>
                        <a href="#" class="bkImg" id="bk15">
                            <img src="./images/bk15.jpg" alt="">
                        </a>
                        <span>아직도 악어와 악어새 이야기를 믿어?</span>
                        <span>이하늬 · 스테이블</span>
                    </li>
                    <li>
                        <a href="#" class="bkImg" id="bk16">
                            <img src="./images/bk16.jpg" alt="">
                        </a>
                        <span>흔한남매</span>
                        <span>흔한남매 · 미래엔아이세움</span>
                    </li>
                </ul>
            </div>

            <button class="next1_2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                    <defs>
                        <style>
                        .cls-1 {
                            fill: none;
                        }
                        </style>
                    </defs>
                    <title />
                    <g data-name="Layer 2" id="Layer_6">
                        <path
                            d="M12,25a1,1,0,0,1-.71-.29,1,1,0,0,1,0-1.42L18.59,16l-7.3-7.29a1,1,0,1,1,1.42-1.42l8,8a1,1,0,0,1,0,1.42l-8,8A1,1,0,0,1,12,25Z" />
                    </g>
                    <g id="frame6">
                        <rect class="cls-1" height="32" width="32" />
                    </g>
                </svg></button>
        </div>
    </article>
</section>

<div class="slidebanner">
    <ul>
        <li class="list"><img src="./images/eventBanner1.jpg" width="1444" alt=""></li>
        <li class="list"><img src="./images/eventBanner2.jpg" width="1444" alt=""></li>
        <li class="list"><img src="./images/eventBanner3.jpg" width="1444" alt=""></li>
        <!-- <li class="list"><img src="./images/eventBanner1.jpg" width="1444" alt=""></li> -->
    </ul>
</div>