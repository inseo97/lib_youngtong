<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>PHP 프로그래밍</title>
    <link rel="stylesheet" type="text/css" href="./css/reset.css">
    <link rel="stylesheet" type="text/css" href="./css/admin.css">


    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="http://kakaomapapi.dothome.co.kr/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">

    <!-- 5버전 -->
    <script defer src="https://use.fontawesome.com/releases/v5.15.3/js/all.js"></script>

    <!-- 6버전 -->
    <script src="https://kit.fontawesome.com/b51af6ee40.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./css/webfont.css">
    <link rel="stylesheet" href="./css/weather-icons.min.css">

    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="./js/jquery.easing.1.3.min.js"></script>

    <script type="text/javascript" src="./js/modernizr.js"></script>
</head>

<body>
    <header>
        <?php include "header.php";?>
    </header>
    <section>
        <div id="admin_box">
            <h3 id="member_title">
                관리자 모드 > 회원 관리
            </h3>
            <ul id="member_list">
                <li>
                    <span class="col1">번호</span>
                    <span class="col2">아이디</span>
                    <span class="col3">이름</span>
                    <span class="col4">레벨</span>
                    <span class="col5">포인트</span>
                    <span class="col6">가입일</span>
                    <span class="col7">수정</span>
                    <span class="col8">삭제</span>
                </li>
                <?php
	//DB에서 전체 회원 가져오기


	$con = mysqli_connect("localhost", DBuser, DBpass, DBname);
	$sql = "select * from members order by num desc"; 
	$result = mysqli_query($con, $sql);
	$total_record = mysqli_num_rows($result); 

	$number = $total_record;


   while ($row = mysqli_fetch_array($result))
   {
      $num         = $row["num"];        
		  $id          = $row["id"];        
		  $name        = $row["name"];       
		  $level       = $row["level"];      
      $point       = $row["point"];      
      $regist_day  = $row["regist_day"]; 
?>

                <li>

                    <form method="post" action="admin_member_update.php?num=<?=$num?>">
                        <span class="col1"><?=$number?></span>
                        <span class="col2"><?=$id?></a></span>
                        <span class="col3"><?=$name?></span>
                        <span class="col4"><input type="text" name="level" value="<?=$level?>"></span>
                        <span class="col5"><input type="text" name="point" value="<?=$point?>"></span>
                        <span class="col6"><?=$regist_day?></span>


                        <span class="col7"><button type="submit">수정</button></span>


                        <span class="col8">
                            <button type="button"
                                onclick="location.href='admin_member_delete.php?num=<?=$num?>'">삭제</button>
                        </span>

                    </form>
                </li>

                <?php
   	   $number--;
   }
?>
            </ul>
            <h3 id="member_title">
                관리자 모드 > 게시판 관리
            </h3>
            <ul id="board_list">
                <li class="title">
                    <span class="col1">선택</span>
                    <span class="col2">번호</span>
                    <span class="col3">이름</span>
                    <span class="col4">제목</span>
                    <span class="col5">첨부파일명</span>
                    <span class="col6">작성일</span>
                </li>


                <form method="post" action="admin_board_delete.php">

                    <?php
	//게시판의 모든 게시글 가져오기
	$sql = "select * from board order by num desc"; 
	$result = mysqli_query($con, $sql);
	$total_record = mysqli_num_rows($result); // 전체 글의 수

	$number = $total_record;


   while ($row = mysqli_fetch_array($result)) 
   {
      $num         = $row["num"]; 
	  	$name        = $row["name"]; 
	  	$subject     = $row["subject"]; 
	  	$file_name   = $row["file_name"]; 
      $regist_day  = $row["regist_day"]; 
      $regist_day  = substr($regist_day, 0, 10)
?>
                    <li>

                        <span class="col1"><input type="checkbox" name="item[]" value="<?=$num?>"></span>
                        <span class="col2"><?=$number?></span>
                        <span class="col3"><?=$name?></span>
                        <span class="col4"><?=$subject?></span>
                        <span class="col5"><?=$file_name?></span>
                        <span class="col6"><?=$regist_day?></span>
                    </li>
                    <?php
   	   $number--;
   }
   mysqli_close($con);
?>

                    <button type="submit">선택된 글 삭제</button>
                </form>
            </ul>
        </div>
    </section>
    <footer id="footer_outer">
        <?php include "footer.php";?>
    </footer>
</body>

</html>