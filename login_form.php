<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>영통도서관 로그인</title>



    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <script defer src="https://use.fontawesome.com/releases/v5.15.3/js/all.js"></script>
    <script src="https://kit.fontawesome.com/b51af6ee40.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/using.css">
    <link rel="stylesheet" href="./css/login.css">

    <link rel="stylesheet" href="./css/webfont.css">
    <link rel="stylesheet" href="./css/weather-icons.min.css">

    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="./js/jquery.easing.1.3.min.js"></script>
    <script type="text/javascript" src="./js/script1.js"></script>
    <script type="text/javascript" src="./js/script2.js"></script>

    <script src="./js/login.js"></script>



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
                <!--         login form -->
                <form action="login.php" class="login__register" id="login-in" method="post" name="login_form">
                    <div class="login__title">Sign In</div>
                    <div class="login__box">
                        <i class='bx bx-user login__icon'></i>
                        <input type="text" placeholder="Username" class="login__input" name="id">
                    </div>
                    <div class="login__box">
                        <i class='bx bx-lock login__icon'></i>
                        <input type="text" placeholder="Password" class="login__input" name="pass" id="pass">
                    </div>
                    <a href="#" class="login__forgot">Forgot Password? </a>

                    <a href="#" class="login__button" onclick="check_input()">Sign In</a>

                    <div>
                        <span class="login__account login__account--account">Don't Have an Account?</span>
                        <a href="./join_form.php"><span class="login__signin login__signin--signup" id="sign-up">Sign
                                Up</span></a>
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