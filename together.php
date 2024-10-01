<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>영통도서관 참여마당</title>



    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
    <!-- 5버전 -->
    <script defer src="https://use.fontawesome.com/releases/v5.15.3/js/all.js"></script>

    <!-- 6버전 -->
    <script src="https://kit.fontawesome.com/b51af6ee40.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/using.css">
    <link rel="stylesheet" href="./css/alert.css">
    <link rel="stylesheet" href="./css/board.css">

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
            <span class="fl content-Title">도서관에 물어보세요</span>
            <div id="location" class="title_wrap">

                <div class="utile_wrap">

                    <ul class="location_wrap">
                        <li class="navi_home"><a href="./index.php">Home</a></li>
                        <li><a href='#'>참여마당</a></li>
                        <li class="last on"><a href="#toggle"> 도서관에 물어보세요 </a></li>

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





            <div class="using_content" id="together_content">
                <div class="cbox03">
                    <ul class="list_type1">
                        <li><span class="tr">* 이 게시판은 도서관 이용관련 문의사항이나 불편사항 등을 질의답변하는 게시판으로 게시판 본래의 취지와 맞지 않는 글은 삭제 또는
                                비공개
                                처리 될 수 있습니다.</span><br><span class="bold">공식 답변을 원하는 민원신청은 아래 바로가기를 통해 신청하시기
                                바랍니다.</span>
                        </li>
                        <br>
                        <li>
                            <span class="bold">게시물 자료 삭제 또는 비공개 처리 기준</span>
                            <ul>
                                <li>국가안전이나 보안에 위배 또는 정치적 목적이나 성향이 있는 경우</li>
                                <li>특정기관, 단체, 부서를 근거없이 비방 또는 특정인을 비방하거나 명예훼손 우려가 있는 경우</li>
                                <li>게시판 운영목적과 관계가 없는 내용, 영리목적의 상업성 광고, 저작권을 침해할 수 있는 내용</li>
                                <li>욕설, 음란물 등 불건전한 내용</li>
                                <li>동일인 또는 동일인이라고 인정되는 자가 똑같은 내용을 주 2회 이상 게시 하거나, 비슷한 내용을 1일 2회 이상 게시하는 경우</li>
                                <li>그 밖에 연습성, 오류, 장난성의 내용 등</li>
                            </ul>
                        </li>
                        <br>

                        <li><span class="tb">수원시 시정과 관련된 제안, 개선사항, 비전제시 등은 "시장님보세요" 게시판을 이용해
                                주시기 바랍니다.</span></li>
                        <a href="http://mayor.suwon.go.kr/web/petition/BD_petitionList.do?vocCd=5" target="_blank"
                            title="새창열림">시장님 보세요 바로가기</a>
                    </ul>

                </div>
            </div>
        </article>

        <article>
            <div class="board">

                <!--boardtop Start-->
                <div class="boardtop">
                    <p class="page_num">총 <span> 533</span>건 <span>1/54</span> 페이지</p>

                    <!--검색 Start-->
                    <div class="board_search">
                        <form name="sf" action="/yt/html/05_news/news01.asp">
                            <input type="hidden" value="list" name="process_type" title="process_type">

                            <fieldset>
                                <legend>게시물 검색</legend>
                                <label for="strSearch_div" class="skip">검색유형선택</label>
                                <select id="strSearch_div" name="keyword">
                                    <option value="">선택</option>
                                    <option value="b_title" selected="">제목</option>
                                    <option value="b_text">내용</option>
                                    <option value="b_user">글쓴이</option>
                                </select>
                                <label for="strSearch_text" class="skip">검색어</label>
                                <input type="text" name="keyfield" class="inputText" id="strSearch_text" value="게시물검색">
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
                            <th scope="col" class="writer">작성자</th>
                            <th scope="col" class="dated">날짜</th>
                            <th scope="col" class="condition">진행상태</th>
                            <th scope="col" class="answer">레벨</th>
                            <th scope="col" class="counter">조회수</th>
                        </tr>
                    </thead>
                    <?php
	if (isset($_GET["page"])) //GET 방식으로 페이지 번호 전달받기
		$page = $_GET["page"];
	else
		$page = 1;


	$con = mysqli_connect("localhost", DBuser, DBpass, DBname);
	$sql = "select * from board order by num desc";
	$result = mysqli_query($con, $sql);
	$total_record = mysqli_num_rows($result); // 전체 글 수


	//한 페이지에 표시되는 행의 개수
	$scale = 10; 
	



	// 전체 페이지 수($total_page) 계산 
	if ($total_record % $scale == 0)     
		$total_page = floor($total_record/$scale); //전체 페이지 수    
	else
		$total_page = floor($total_record/$scale) + 1; 
 

	$start = ((int)$page - 1) *  (int)$scale; //시작 레코드 번호    

	$number =  (int)$total_record -  (int)$start; //글의 일련번호




	//DB에서 글 목록을 가져오기 위해 반복 루프 설정.
	for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)
	{
		//글 목록의 항목 가져오기
		mysqli_data_seek($result, $i);
		// 가져올 레코드로 위치(포인터) 이동
		$row = mysqli_fetch_array($result); // 글 목록의 한 행, 즉, 레코드 하나를 가져와 $row에 저장.
		// 하나의 레코드 가져오기
		$num         = $row["num"]; 
		$id          = $row["id"]; 
		$name        = $row["name"]; 
		$subject     = $row["subject"]; 
		$file_image  = $row["file_image"]; 
		$regist_day  = $row["regist_day"]; 
		$hit         = $row["hit"]; 
		$level       = $row["level"]; 
        

		if ($row["file_name"])
			$file_image = "<img src='./img/file.gif'>";
		else
			$file_image = " "; //공백저장
?>
                    <tbody>
                        <tr>
                            <th class="num"><?=$number?></th>
                            <td class="subject">
                                <a href="board_view.php?num=<?=$num?>&page=<?=$page?>">
                                    <?=$subject?>
                                </a>
                            </td>
                            <td class="writer"><?=$name?></td>
                            <td class="dated"><?=$regist_day?></td>
                            <td class="condition"><?=$file_image?></td>
                            <td class="answer"><?=$level?></td>
                            <td class="counter"><?=$hit?></td>
                        </tr>
                        <?php
		$number--; 
	}
	mysqli_close($con);
?>
                    </tbody>
                </table>




            </div>
            <ul class="buttons" id="together_btn_write">
                <li>
                    <?php 
	if($userid) {
?>
                    <button onclick="location.href='board_form.php'">글쓰기</button>
                    <?php
	} else {
?>
                    <a href="javascript:alert('로그인 후 이용해 주세요!')"><button>글쓰기</button></a>
                    <?php
	}
?>
                </li>
            </ul>
        </article>

        <ul class="board_navi" id="page_num">
            <?php
	if ($total_page>=2 && $page >= 2)	
	{
		$new_page = $page-1;
		echo "<li><a href='together.php?page=$new_page' class='prev_end'><img src='./images/Asset 1.png' alt='처음페이지로'></a> </li>";
	}		
	else 
		echo "<li>&nbsp;</li>";

	// 게시판 목록 하단에 페이지 링크 번호 출력
	for ($i=1; $i<=$total_page; $i++)
	{
		if ($page == $i)     // 현재 페이지 번호 링크 안함
		{
			echo "<li><b> $i </b></li>";
		}
		else
		{
			echo "<li><a href='together.php?page=$i'> $i </a><li>";
		}
	}
	if ($total_page>=2 && $page != $total_page)		
	{
		(int)$new_page = ((int)$page+1);	
		echo "<li> <a href='together.php?page=$new_page'><img src='./images/Asset 2.png' alt='다음페이지로'></a> </li>";
	}
	else 
		echo "<li>&nbsp;</li>";
?>
        </ul>

    </section>
    <footer id="footer_outer">
        <?php include "./footer.php" ?>
    </footer>
</body>

</html>