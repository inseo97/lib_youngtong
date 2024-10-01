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
    <!-- <script defer src="https://use.fontawesome.com/releases/v5.15.3/js/all.js"></script> -->

    <!-- 6버전 -->
    <script src="https://kit.fontawesome.com/b51af6ee40.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/using.css">
    <link rel="stylesheet" href="./css/joinus.css">

    <link rel="stylesheet" href="./css/webfont.css">
    <link rel="stylesheet" href="./css/weather-icons.min.css">

    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="./js/jquery.easing.1.3.min.js"></script>
    <script type="text/javascript" src="./js/script1.js"></script>
    <script type="text/javascript" src="./js/script2.js"></script>


    <script>
    function check_input() {
        /* 저장하기 */

        if (!document.member_form.id.value.trim()) {
            alert("아이디를 입력하시오!");
            document.member_form.id.focus();
            return;
        }

        if (!document.member_form.pass.value.trim()) {
            alert("비밀번호를 입력하시오!");
            document.member_form.pass.focus();
            return;
        }

        if (!document.member_form.pass_confirm.value.trim()) {
            alert("비밀번호확인을 입력하시오!");
            document.member_form.pass_confirm.focus();
            return;
        }

        if (!document.member_form.name.value.trim()) {
            alert("이름을 입력하시오!");
            document.member_form.name.focus();
            return;
        }

        if (!document.member_form.email1.value.trim()) {
            alert("이메일주소를 입력하시오!");
            document.member_form.email1.focus();
            return;
        }


        if (!document.member_form.email2.value.trim()) {
            alert("이메일주소를 입력하시오!");
            document.member_form.email2.focus();
            return;
        }

        /* 비밀번호와 비밀번호 확인 입력창에 입력된 데이터가 같은지 비교 */
        if (document.member_form.pass.value.trim() != document.member_form.pass_confirm.value.trim()) {
            alert("비밀번호가 일치하지 않습니다. \n 다시 입력해 주세요!")
            document.member_form.pass.focus();;
            document.member_form.pass.select();
            return;
        }

        document.member_form.submit();

    }

    function reset_form() {
        /* 입력한 데이터 초기화 함수 */
        document.member_form.id.value = "";
        document.member_form.pass.value = "";
        document.member_form.pass_confirm.value = "";
        document.member_form.name.value = "";
        document.member_form.email1.value = "";
        document.member_form.email2.value = "";
        document.member_form.id.focus();
        return;
    }

    function check_id() {
        /* 아이디 중복확인 */
        window.open("member_check_id.php?id=" + document.member_form.id.value,
            "IDcheck",
            "left=700, top=300, width=350, height=200, scrollbars=no, resizable=yes"
        )
    }
    </script>

</head>

<body>
    <header>
        <?php include "./header.php" ?>
    </header>

    <div class="login">
        <div class="login__content">
            <div class="login__img">
                <img src="./images/login_bg.png" alt="user login">
            </div>
            <div class="login__forms">
                <!--         create account form -->
                <form action="member_insert.php" class="login__create" id="login-up" name="member_form" method="post">
                    <div class="login__title">Create Account</div>

                    <div class="login__box_id">
                        <i class='bx bx-user login__icon'></i>
                        <input type="text" placeholder="Id" class="login__input" name="id">
                        <a href="#" onclick="check_id()">중복확인</a>

                    </div>


                    <div class="login__box">
                        <i class='bx bx-lock login__icon'></i>
                        <input type="text" placeholder="Password" class="login__input" name="pass">
                    </div>
                    <div class="login__box">
                        <i class='bx bx-lock login__icon'></i>
                        <input type="text" placeholder="Password Check" class="login__input" name="pass_confirm">
                    </div>

                    <div class="login__box">
                        <i class='bx bx-user login__icon'></i>
                        <input type="text" placeholder="Name" class="login__input" name="name">
                    </div>

                    <div class="login__box_email">
                        <input type="text" name="email1" class="login__input" placeholder="Email1">
                        <i class='bx bx-at login__icon'></i>
                        <input type="text" name="email2" class="login__input" placeholder="Email2">
                    </div>
                    <a href="#" class="login__button" onclick="check_input()">Sign Up</a>

                    <div>
                        <span class="login__account login__account--account">Already have an Account?</span>
                        <a href="./login_form.php"><span class="login__signup login__signup--signup" id="sign-in">Sign
                                In</span></a>
                    </div>
                    <div class="login__social">
                        <a href="#" class="login__social--icon"><i class='bx bxl-facebook'></i></a>
                        <a href="#" class="login__social--icon"><i class='bx bxl-twitter'></i></a>
                        <a href="#" class="login__social--icon"><i class='bx bxl-google'></i></a>
                        <a href="#" class="login__social--icon"><i class='bx bxl-github'></i></a>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <footer id="footer_outer">
        <?php include "./footer.php" ?>
    </footer>
</body>

</html>