<?php
    include "define.php"; //파일을 현재 위치에 삽입해~~
    
    session_start(); //세션시작. 

    if(isset($_SESSION["userid"])) $userid = $_SESSION["userid"];

    else $userid = "";//로그인 상태가 아니라면

    if(isset($_SESSION["username"])) $username = $_SESSION["username"];

    else $username = "";

    if(isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];

    else $userlevel = "";

    if(isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];

    else $userpoint = "";

?>
<script type="text/javascript" src="./js/weather.js"></script>
<div class="skip_nav">
    <ul>
        <li>
            <a href="#">홈</a>
        </li>
        <?php
            if(!$userid){
        ?>
        <li>
            <a href="./login_form.php">로그인</a>
        </li>
        <li>
            <a href="./join_form.php">회원가입</a>
        </li>
        <?php
            } else{
                $logged = $username."님 [Level:".$userlevel.", Point:".$userpoint."]";

            ?>
        <li><?= $logged ?></li>
        <li> <a href="logout.php">로그아웃</a> </li>
        <li> <a href="member_modify_form.php">마이페이지</a> </li>
        <?php
            }
            ?>

        <?php
            if($userlevel == 9){
        ?>
        <li> | </li>
        <li><a href="admin.php">관리자모드</a></li>
        <?php
            }
        ?>
        <li><a href="#">온라인정회원신청</a>
        </li>
        <li>
            <a href="#">사이트맵</a>
        </li>
    </ul>
</div>
<div id="topMenu">
    <ul>
        <li>
            <a href="#">홈</a>
        </li>
        <?php
            if(!$userid){
        ?>
        <li>
            <a href="./login_form.php">로그인</a>
        </li>
        <li>
            <a href="./join_form.php">회원가입</a>
        </li>
        <?php
            } else{
                $logged = $username."님 [Level:".$userlevel.", Point:".$userpoint."]";

            ?>
        <li><?= $logged ?></li>
        <li> <a href="logout.php">로그아웃</a> </li>
        <li> <a href="member_modify_form.php">마이페이지</a> </li>
        <?php
            }
            ?>

        <?php
            if($userlevel==10){
        ?>
        <li> | </li>
        <li><a href="admin.php">관리자모드</a></li>
        <?php
            }
        ?>
        <li><a href="#">온라인정회원신청</a>
        </li>
        <li>
            <a href="#">사이트맵</a>
        </li>
    </ul>
</div>

<h1 onclick="location.href='./index.php'">영통도서관</h1>

<div class="api weather">
    <div class="api_wrap">
        <div class="cicon"></div>
        <div class="temp_info">
            <div class="date"></div>
            <!-- <div class="cname"></div> -->
            <!-- 도시이름 -->
            <div class="ctemp">현재 온도 : </div>
            <!-- <div class="chightemp">최고 온도 : </div>
                    <div class="clowtemp">최저 온도 : </div>
                    <div class="humidity">습도 : </div>
                    <div class="wind">풍속 : </div> -->
        </div>
    </div>
</div>


<nav>
    <ul>
        <li>
            <a href="./using.php">이용안내</a>
            <ul>
                <li><a href="./using.php">이용시간안내</a></li>
                <li><a href="./using.php">열람실이용</a></li>
                <li><a href="./using.php">대출회원가입</a></li>
                <li><a href="./using.php">전자도서관</a></li>
            </ul>
        </li>
        <li>
            <a href="./reserve.php">통합예약/신청</a>
            <ul>
                <li><a href="./reserve.php">독서문화프로그램</a></li>
                <li><a href="./reserve.php">푸른숲책뜰</a></li>
                <li><a href="./reserve.php">도서관체험교실</a></li>
                <li><a href="./reserve.php">디지털자료실PC예약</a></li>
                <li><a href="./reserve.php">열람실좌석현황</a></li>
                <li><a href="./reserve.php">자원봉사신청</a></li>
            </ul>
        </li>
        <li>
            <a href="./together.php">참여마당</a>
            <ul>
                <li><a href="./together.php">도서관에 물어보세요</a></li>
                <li><a href="./together.php">동아리커뮤니티</a></li>
                <li><a href="./together.php">칭찬합니다 </a></li>
            </ul>
        </li>
        <li>
            <a href="./alert.php">도서관 소식</a>
            <ul>
                <li><a href="./alert.php">공지사항</a></li>
                <li><a href="./alert.php">공개자료실</a></li>
            </ul>
        </li>
        <li>
            <a href="./info.php">도서관 소개</a>
            <ul>
                <li><a href="./info.php">연혁</a></li>
                <li><a href="./info.php">행정서비스현장</a></li>
                <li><a href="./info.php">조직도</a></li>
                <li><a href="./info.php">현황안내</a></li>
                <li><a href="./info.php">상징물</a></li>
                <li><a href="./map.php">오시는길</a></li>
                <li><a href="./info.php">특화자료</a></li>
            </ul>
        </li>

    </ul>
</nav>
<div class="sub_shadow"></div>